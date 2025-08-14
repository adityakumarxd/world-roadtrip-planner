package com.example.roadtrip.controller;

import com.example.roadtrip.model.RoadTrip;
import com.example.roadtrip.service.RoadTripService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/roadtrips")
public class RoadTripController {

    private final RoadTripService roadTripService;

    public RoadTripController(RoadTripService roadTripService) {
        this.roadTripService = roadTripService;
    }

    @PostMapping
    public ResponseEntity<RoadTrip> createRoadTrip(@RequestParam Long userId, @RequestBody RoadTrip roadTrip) {
        RoadTrip created = roadTripService.createRoadTrip(userId, roadTrip);
        return new ResponseEntity<>(created, HttpStatus.CREATED);
    }

    @GetMapping
    public ResponseEntity<List<RoadTrip>> getAllRoadTrips() {
        List<RoadTrip> trips = roadTripService.getAllRoadTrips();
        return ResponseEntity.ok(trips);
    }

    @GetMapping("/{id}")
    public ResponseEntity<RoadTrip> getRoadTrip(@PathVariable Long id) {
        RoadTrip trip = roadTripService.getRoadTripById(id);
        return ResponseEntity.ok(trip);
    }

    @PutMapping("/{id}")
    public ResponseEntity<RoadTrip> updateRoadTrip(@PathVariable Long id, @RequestBody RoadTrip roadTrip) {
        RoadTrip updated = roadTripService.updateRoadTrip(id, roadTrip);
        return ResponseEntity.ok(updated);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteRoadTrip(@PathVariable Long id) {
        roadTripService.deleteRoadTrip(id);
        return ResponseEntity.noContent().build();
    }
}
