
  <div id="mainContent" class="content">
  <h1 style="text-align:center; text-decoration:underline;">REQUIREMENTS</h1>
  </div>
    <div id="mainContent" class="content">
	  <h1 style="text-align:left;">Explicit Requirements</h1>
	  <ul>
		  <li style="font-size:175%"> 
		  	Robots:
			  <ul>
			  <li style="font-size:105%"> 
				Detect obstacles and stop moving further
			  </li>
			  <li style="font-size:105%"> 
				Detect cliffs using IR sensors and stop navigating in the current direction
			  </li>
			  </ul>
		  </li>

		  <li style="font-size:175%"> 
		  	Central Hub & Camera:
			  <ul>
			  <li style="font-size:105%"> 
				Locate the robots based on the camera's video
			  </li>
			  <li style="font-size:105%"> 
				Find the orientation of the robots
			  </li>
			  <li style="font-size:105%"> 
				Designate movement tasks for the robots and keep track of places that have already been covered.
			  </li>
			  <li style="font-size:105%"> 
				Gather the robots on completion of designated tasks and return them to a home base.
			  </li>
			  </ul>
		  </li>
	  </ul>
	  <h1 style="text-align:left;">Implicit Requirements</h1>
	  <ul>
		  <li style="font-size:175%"> 
		  Robots should have two dimensional field of motion so as to be able to navigate around obstacles.
		  </li>
		  <li style="font-size:175%"> 
		  Constant and meaningful communication between the robots and the central hub at all times.
		  </li>
		  <li style="font-size:175%"> 
		  Speed and direction control, as well as path scheduling that is done by the central hub.
		  </li>
	  </ul>
	  <h1 style="text-align:left;">Stemming Requirements</h1>
	  <ul>
		  <li style="font-size:175%"> 
		  One potential improvement to the system would be the use of multiple cameras to increase the area that one robot can cover.
		  </li>
		  <li style="font-size:175%"> 
		  In the case where a robot disappears from the field of view of one camera, while appearing in the view of another, the robot and process should continue to function uninterrupted.
		  </li>
	  </ul>
  </div>
