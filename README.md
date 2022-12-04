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
- List of UIDs
- MD5 Hash of project name and id

## Endpoints

# Login Endpoints

POST /api/login         Returns a session token if authenticated

Headers:
'Accept' : 'application/json'

Body:
'email' : '{{ EMAIL }}'
'password' : '{{ PASSWORD }}'

POST /api/register      Returns a session token if successfully registered

Headers:
'Accept' : 'application/json'

Body:
'name' : '{{ NAME }}'
'email' : '{{ EMAIL }}'
'password' : '{{ PASSWORD }}'
'password_confirmation' : '{{ PASSWORD }}'

POST /api/logout        Revokes all session tokens tied to your account

Headers:
'Accept' : 'applcatiion/json'
'Authorization' : 'Bearer {{ TOKEN }}'


# Project Endpoints

GET /api/projects       Returns a JSON array of all the projects (protected)

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

GET /api/projects/{id}  Returns a JSON object of the specified project

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

DEL /api/projects/{id}  Deletes the specified project

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

POST /api/project      Creates a project

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

Body:
'name' : '{{ PROOJECT_NAME }}'
'description' : '{{ PROJECT_DESCRIPTION }}'             // Description is optional
'location' : '{{ PROJECT_LOCATION }}'
'tags' : '{{ TAGS }}'                                   // Tags optional
'link' : '{{ LINK }}'                                   // Link optional


PUT /api/project/{id}   Updates the specified project

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

Body:
'name' : '{{ PROOJECT_NAME }}'
'description' : '{{ PROJECT_DESCRIPTION }}'             // Description is optional
'location' : '{{ PROJECT_LOCATION }}'
'tags' : '{{ TAGS }}'                                   // Tags optional
'link' : '{{ LINK }}'                                   // Link optional

GET /api/project/search/{query}

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

# Profile Endpoints

CRUD
GET /api/profile/   Returns a list of all profiles in the database

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

GET /api/profile/{id}   Returns the profile object corresponding to the id

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

POST /api/profile   Creates a profile object

Headers:
'Accept' : 'application/json'
'Authorization' : 'Bearer {{ TOKEN }}'

Body:
'name' : '{{ NAME }}'
'bio' : '{{ BIO }}'
'skills' : '{{ SKILLS }}'
'location' : '{{ LOCATION }}'
