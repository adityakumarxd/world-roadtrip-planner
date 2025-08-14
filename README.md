# Road Trip Application

## Overview
The Road Trip Application is a Spring Boot-based project designed to manage road trip planning and user information. It provides RESTful APIs for user operations and road trip management.

## Project Structure
```
roadtrip-app
├── src
│   ├── main
│   │   ├── java
│   │   │   └── com
│   │   │       └── example
│   │   │           └── roadtrip
│   │   │               ├── RoadTripApplication.java
│   │   │               ├── controller
│   │   │               │   ├── UserController.java
│   │   │               │   └── RoadTripController.java
│   │   │               ├── model
│   │   │               │   ├── User.java
│   │   │               │   └── RoadTrip.java
│   │   │               ├── repository
│   │   │               │   ├── UserRepository.java
│   │   │               │   └── RoadTripRepository.java
│   │   │               ├── service
│   │   │               │   ├── UserService.java
│   │   │               │   └── RoadTripService.java
│   │   │               └── exception
│   │   │                   └── ResourceNotFoundException.java
│   │   └── resources
│   │       ├── application.properties
│   │       └── data.sql
│   └── test
│       └── java
│           └── com
│               └── example
│                   └── roadtrip
│                       └── (unit tests)
├── pom.xml
└── README.md
```

## Setup Instructions
1. **Clone the repository:**
   ```
   git clone <repository-url>
   cd roadtrip-app
   ```

2. **Build the project:**
   ```
   mvn clean install
   ```

3. **Run the application:**
   ```
   mvn spring-boot:run
   ```

4. **Access the API:**
   The application will be running on `http://localhost:8080`. You can access the user and road trip APIs at the following endpoints:
   - User APIs: `/api/users`
   - Road Trip APIs: `/api/roadtrips`

## Dependencies
This project uses Maven for dependency management. The `pom.xml` file contains all necessary dependencies for Spring Boot and JPA.

## Contributing
Feel free to submit issues or pull requests for improvements or bug fixes.

## License
This project is licensed under the MIT License.