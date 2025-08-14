package com.example.roadtrip.repository;

import com.example.roadtrip.model.RoadTrip;
import org.springframework.data.jpa.repository.JpaRepository;
import java.util.List;

public interface RoadTripRepository extends JpaRepository<RoadTrip, Long> {
    List<RoadTrip> findAllByUserId(Long userId);
}
