package com.example.roadtrip.model;

import javax.persistence.*;
import java.time.LocalDateTime;

@Entity
@Table(name = "road_trips")
public class RoadTrip {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "user_id", nullable = false)
    private User user;

    @Column(nullable = false, length = 150)
    private String title;

    @Column(columnDefinition = "TEXT")
    private String description;

    @Column(length = 50)
    private String country;

    @Column(precision = 8, scale = 2)
    private Double totalDistance;

    @Column(nullable = false)
    private LocalDateTime createdAt = LocalDateTime.now();

    // Getters and Setters
}
