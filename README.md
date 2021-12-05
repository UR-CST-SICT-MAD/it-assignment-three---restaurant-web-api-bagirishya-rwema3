[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-f059dc9a6f8d3a56e377f745f24479a46679e63a5d9fe6f495e02850cd0d8118.svg)](https://classroom.github.com/online_ide?assignment_repo_id=6445593&assignment_repo_type=AssignmentRepo)
# MAD Assignment Web API (for IT)

### Registration Number: 219000504

## Scenario

A culinary health supervision and rating agency needs a catalog of restaurants to help them know all available restaurants in Rwanda.
restaurants should have a name, the name of the owner(owner can be individual or a company), rating(number of stars), address or location (to simplify this you can just use districts and sectors only), list of dishes offered by the restaurant. Each dish should have a name, cooking time, a list of ingredients, price of the dish and different pictures of the dish.

## instructions
1. Create a web api reflecting the above scenario using technologies(programming language....) of your choice.
2. Your Api should provide a way to list restaurants in a specified location (district or sector), restaurants owned by a given individual or company, resturants of a given rating etc...Think of all the possible scenarios users or other systems would consume your API and the type of information they would need to access.
3. It should also have features like Authentication and Authorization in  a way that only authorized users can add or modify some areas of the api.
4. Use Postman to document your Web API.
5. Deploy your web API to the platform of your choice (Heroku, Azure, etc...)
6. Submission will be done via this repository but you should also include a link to your postman collection and a link to the hosted webApi along with some default credentials for testing.

#### Note: Don't be limited to the features specified in instructions, feel free to add any other feature you think is necessary.


#### Link to the Hosted Web API :
https://rwemaapi.000webhostapp.com/

#### Link to Postman Collection : 

Credentials for Postman testing:

Username : rwema
Password : pelin123
Authentication type : "Basic Auth"

1) https://rwemaapi.000webhostapp.com/api/restaurants/allrestaurants.php //View all restaurant
-REQUEST=GET
2) https://rwemaapi.000webhostapp.com/api/dish/read.php //view all dishes
-REQUEST=GET
3) https://rwemaapi.000webhostapp.com/api/dish/read_single.php?id=1 or 2,3.. // view single dish
-REQUEST=GET
4) https://rwemaapi.000webhostapp.com/api/restaurants/create.php //Add new Restaurant
-REQUEST=POST
-Content-Type:Apllication/json body:raw
{
    "restaurant_id" : "...", //(unique_id)
    "restaurant_name" : "...",
    "owner" : "...",
    "rating" : "...",
    "location" : "..."
}

5) https://rwemaapi.000webhostapp.com/api/restaurants/delete.php  //delete a Restaurant
-REQUEST=DElETE
{
    "restaurant_id" : "..." //(existing restaurant_id)
}

6) https://rwemaapi.000webhostapp.com/api/dish/delete.php //delete dish
-REQUEST=DElETE
{
id" : "..." (existing dish_id)
}

7) https://rwemaapi.000webhostapp.com/api/restaurants/update.php //update a restaurant
REQUEST = PUT
{
    "restaurant_id" : "...", //(Existing_id)
    "restaurant_name" : "...",
    "owner" : "...",
    "rating" : "...",
    "location" : "..."
}

!! Find restaurant by rating or location:

https://rwemaapi.000webhostapp.com/search.php

