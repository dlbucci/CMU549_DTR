<h3>Central Hub</h3>

<ul class="competitors">
  <li>
    <h4>Raspberry Pi Model B+</h4>

    <p>The Central Hub is a Raspberry Pi Model B+, which is responsible for reading in images, tracking the robots, and sending commands to the robots using a USB bluetooth device.</p>

    <figure>
      <img src="images/rpi.jpg" alt="camera" width="300" height="130" align="top" />
      <figcaption>Raspberry Pi &amp; Bluetooth</figcaption>
    </figure>
  </li>

  <li>
    <h4>Raspberry Pi Camera Module</h4>

    <p>The Raspberry Pi Camera Module is used to record and track the robots.</p>

    <figure>
      <img src="images/camera.png" alt="camera" width="180" height="108" align="top" />
      <figcaption>Raspberry Pi Camera</figcaption>
    </figure>
  </li>
</ul>

<h3>Robot</h3>

<ul class="competitors">
  <li>
    <h4>Chassis</h4>

    <figure>
      <img src="images/chasis.jpg" alt="chassis" width="45%" height="45%" align="top" />
      <figcaption>Magician Chassis</figcaption>
    </figure>
  </li>

  <li>
    <h4>Component Placement</h4>

    <figure>
      <img src="images/placement.jpg" alt="Component Placement" width="100%" height="100%" align="top" />
    </figure>
  </li>

  <li>
    <h4>Microcontroller</h4>

    <figure>
      <img src="images/atmega.jpg" alt="microcontroller" width="25%" height="25%" align="top" />
    </figure>
  </li>

  <li>
    <h4>Sensors</h4>

    <figure>
      <img src="images/sensors.jpg" alt="sensors" width="50%" height="50%" align="top" />
      <figcaption>Bump &amp; IR Sensors</figcaption>
    </figure>
  </li>

  <li>
    <h4>Others</h4>

    <figure>
      <img src="images/others.jpg" alt="others" width="40%" height="40%" align="top" />
      <figcaption>Bluetooth &amp; Battery</figcaption>
    </figure>
  </li>
</ul>

<h3>Software Components</h3>

<ul class="competitors">
  <li>
    <h4><a href="http://opencv.org">OpenCV</a></h4>
    
    OpenCV is used to process the camera images, and track the robots.
  </li>

  <li>
    <h4><a href="http://www.python.org">Python</a></h4>

    Python is used by the central hub for a few tasks.
    The Python-OpenCV binding is used to work with OpenCV and pySerial is used to communicate over bluetooth with the robots.
  </li>
</ul>

<h3>Protocols Used</h3>

<ul class="competitors">
  <li>
    <h4><a href="http://www.bluetooth.com">Bluetooth</a></h4>

    <p>Bluetooth is used for communication between the Central Hub and the robots.</p>
  </li>
</ul>

