# RoadMapping
The demonstration of engineering concepts using a problem statement. 
## User Story
> As a user, I want an autonomous car to map roads. The car can drive itself up to 200km after refueling. The car should reach a fuel station and refuel itself before it runs out of petrol. Car always starts from a garage outside of the mapping area with full fuel and returns to the garage once the mapping task is complete. 

> I want to run a command `php map.php --road_type=urban --road_length=900` and I want to see the below output after the mapping task (of 900km in this case) simulation is completed. 
total time spent on the mapping task
number of times refuelled
total distance travelled

`--road_type accepts urban or rural`

> On urban roads, the maximum range of the car drops by **25%** due to traffic

> The garage is **20km** from urban areas  and **50km** from rural areas

> From any point, the car can refuel itself by taking a detour that is a round-trip of **10km**. 

> Time to refuel is **30 mins.** There are no fuel pumps between the city and the garage.

> Speed limit imposed by the police is **70kmph**. Urban traffic causes a **25%** decrease in the  limit.

> Rural areas allow a relaxation of **15%** on the limit.
The car must travel the entire length of the road and return to the garage to mark the mapping task as complete.


## Approach: 
<img width="1268" alt="Roadmap_classdiagram" src="https://user-images.githubusercontent.com/51235238/98239092-70e77980-1f8d-11eb-9b5b-f53123e98eb9.png">

## Instruction 
[Hosted Web App](http://rm-env.eba-beqhjpa5.ap-south-1.elasticbeanstalk.com/Car.php)


## Final Ouput
- [x] Web UI
- [x] CI
- [x] CD (AWS Elastic Beanstalk)
- [x] Database (AWS RDS)
- [x] Kanban Board
- [x] Private Github Repository
- [x] Readme
- [x] Presentation
- [ ] Visualisation 


