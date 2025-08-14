package com.example.roadtrip.service;

import com.example.roadtrip.exception.ResourceNotFoundException;
import com.example.roadtrip.model.RoadTrip;
import com.example.roadtrip.model.User;
import com.example.roadtrip.repository.RoadTripRepository;
import com.example.roadtrip.repository.UserRepository;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class RoadTripService {

    private final RoadTripRepository roadTripRepository;
    private final UserRepository userRepository;

    public RoadTripService(RoadTripRepository roadTripRepository, UserRepository userRepository) {
        this.roadTripRepository = roadTripRepository;
        this.userRepository = userRepository;
    }

    public RoadTrip createRoadTrip(Long userId, RoadTrip trip) {
        User user = userRepository.findById(userId)
            .orElseThrow(() -> new ResourceNotFoundException("User not found with id " + userId));
        trip.setUser(user);
        return roadTripRepository.save(trip);
    }

    public RoadTrip getRoadTripById(Long id) {
        return roadTripRepository.findById(id)
            .orElseThrow(() -> new ResourceNotFoundException("Road trip not found with id " + id));
    }

    public List<RoadTrip> getAllRoadTrips() {
        return roadTripRepository.findAll();
    }

    public List<RoadTrip> getRoadTripsByUser(Long userId) {
        return roadTripRepository.findAllByUserId(userId);
    }

    public RoadTrip updateRoadTrip(Long id, RoadTrip updatedTrip) {
        RoadTrip existing = getRoadTripById(id);
        existing.setTitle(updatedTrip.getTitle());
        existing.setDescription(updatedTrip.getDescription());
        existing.setCountry(updatedTrip.getCountry());
        existing.setTotalDistance(updatedTrip.getTotalDistance());
        return roadTripRepository.save(existing);
    }

    public void deleteRoadTrip(Long id) {
        RoadTrip existing = getRoadTripById(id);
        roadTripRepository.delete(existing);
    }
}
