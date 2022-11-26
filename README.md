## Git Together Api

Git Together Api is a collaborative platform used to connect individuals to assist in projects. 

## Api

This Api currently has public endpoints to get a list of projects, search for a project, login and register.

It also has protected endpoints to create, delete, update a project, and to logout.

Will work on making ownership of projects as well as being a collaborator.

## Project

The project currently has:

- Name
- Description
- Location (stored as a string for now)
- Tags
- Link

## Endpoints

For endpoints:

GET /api/projects       Returns a JSON array of all the projects (protected)

GET /api/projects/{id}  Returns a JSON object of the specified project

DEL /api/projects/{id}  Deletes the specified project

POST /api/projects      Creates a project

PUT /api/project/{id}   Updates the specified project
