creating an ajax call api func
creating different models for separate tables
making controller for making an api calls
separating functions for each table type currently it will be 3
using switch case for calling fun based on keyword 


for now creating lets fix the form first
how to fix the layout for profile form so currently everything is componentised so that will have to be changed and other styling should be used

just start making forms and stuff then implement 
there are 3 dff. segments of form so can be replicated from portfolio, but there is a setup which prefills data using live wire components so must change 
problem is that whole structure is showing in disarrayed style	what if i utilize whole card strucure if it looksnice

too much confusion has arrived what if we create whole page from scratch
steps for making whole page from scratch and while in that process fear is creeping up fear of not completing it perfectly but i have to complete it working not with perfection

making an experimental component for loading without crashing but why fear this much let it crash it is the only to learn this shifting	

firstly copying whole code of card 
now latest issue is 
replacing only form which looks proper
bootstrap web solution works so going to implement it
- now applying profile one component to new bootstrap form with 
now what about separate inputs and stuff and copy
implmeting componet
- complete button fist after that
- now planning for lattitudes and longitudes set up will be observe how profile works from live wire and create 
- change the form button from last  to all 
- so it took almost an hour to fully replace the form types successfully without any errors but still one form is remained
- now firstly changin the name for longitudes and longitudes after that applying fields and updattion funtion
now self explaining the updation process after pushing the already written code
lets self explain the process lets check it from profile
it has remained to change the 
- now applying the code first after that now first checking the profile is working or not 
- wire model is for changing the global variable
- checking how function is called
- testing the page 
- completed coordinated updating functionality
- now making the flow for detecting the cit based on coordinates and detecting the hotel from city
- making changes in main controller
- removing extra characters working perfectly
- first of all finding a way to get city id first , so currently only once 
# basic flow will be 
+ firstly hotel input will be taken based on coordinates city will be derived after that from that city, hotel will be finalized and and that id will be send to a table for platforms, form that point on using that id every time data will be fetched
+ further more how processing will happen booking controller will have method which is contructor method



 - writting a switch case which will call to a method on api call, now what if i want to get the data for all the platforms simultaneously
  data: {
        labels: ["1 May", "2 May", "3 May", "4 May", "5 May", "6 May", "7 May", "8 May", "9 May"],
        datasets: [
            {
                label: "Line A",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14],
                borderColor: "#153F92",
                pointBackgroundColor: "#ffffff",
                pointBorderColor: "#153F92",
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: false,
                tension: 0,
            },
            {
              label: 'Line B',
              data: [14,11,9,6,8,7,6,5,4],
              borderColor: "#153F92",
              pointBackgroundColor: "#ffffff",
              pointBorderColor: "#153F92",
              pointBorderWidth: 2,
              pointRadius: 4,
              pointHoverRadius: 6,
              fill: false,
              tension: 0,
            },
        ],
    },







    

# New flow for project
1. first of all using google api we will get the lat long of hotel for owner
2. Lat long will be provided to api data and response hotels will be stored in DB
3. further user will select the platform using dropdown and after that it will be delivered to frontend   





