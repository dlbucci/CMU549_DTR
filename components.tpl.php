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

<h3>Component Costs and Purchase Links</h3>
<style type="text/css">
	table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
}
.tableizer-table th {
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>Component</th><th>Purchase Link</th><th>Price per unit</th><th>Quantity</th></tr>
 <tr><td>Raspberry Pi 2</td><td><a href="http://www.element14.com/community/community/raspberry-pi/raspberrypi2">Link</a></td><td>$35.00 </td><td>2</td></tr>
 <tr><td>Raspberry Pi Camera Module</td><td><a href="http://www.element14.com/community/docs/DOC-54359/l/raspberry-pi-camera-board">Link</a></td><td>$25.00 </td><td>2</td></tr>
 <tr><td>Raspberry Pi Bluetooth Module</td><td><a href="http://www.amazon.com/Inateck-Bluetooth-Wireless-Compatible-Playback/dp/B00N2E3ZHG">Link</a></td><td>$9.99 </td><td>1</td></tr>
 <tr><td>Camera Mount</td><td><a href="http://www.adafruit.com/products/1434">Link</a></td><td>$5.00 </td><td>2</td></tr>
 <tr><td>Long Camera Cable</td><td><a href="http://www.adafruit.com/products/2144">Link</a></td><td>$6.00 </td><td>2</td></tr>
 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Robot Custom PCB</td><td>&nbsp;</td><td>$25.00 </td><td>2</td></tr>
 <tr><td>Robot Chassis</td><td><a href="https://www.sparkfun.com/products/12866?gclid=Cj0KEQiAjZGnBRCOuJOUo9Xd0sUBEiQAPbicN02EIz4zT_7gteLYZwiynkYaCRn-dtxbcIjszOfPXuYaAgyk8P8HAQ">Link</a></td><td>$14.95 </td><td>2</td></tr>
 <tr><td>Bluetooth Module(HC-05)</td><td><a href="http://www.amazon.com/gp/product/B00CDG65F8/ref=ord_cart_shr?ie=UTF8&psc=1">Link</a></td><td>$12.44 </td><td>2</td></tr>
 <tr><td>H-BRIDGE MotorDriver</td><td><a href="http://www.digikey.com/product-detail/en/SN754410NE/296-9911-5-ND/380180">Link</a></td><td>$2.56 </td><td>2</td></tr>
 <tr><td>IR Sensors</td><td><a href="http://www.digikey.com/product-detail/en/GP2Y0A51SK0F/425-2854-ND/4103863">Link</a></td><td>$7.48 </td><td>4</td></tr>
 <tr><td>IR crimp connector</td><td><a href="http://www.digikey.com/product-detail/en/03ZR-3H-P/455-2279-ND/1678823">Link</a></td><td>$0.44 </td><td>4</td></tr>
 <tr><td>Mechanical Bumper Sensor</td><td><a href="https://www.sparkfun.com/products/11999">Link</a></td><td>$4.95 </td><td>2</td></tr>
 <tr><td>ATmega328P</td><td><a href="http://www.digikey.com/product-detail/en/ATMEGA328P-PU/ATMEGA328P-PU-ND/1914589">Link</a></td><td>$3.74 </td><td>2</td></tr>
 <tr><td>MIC5209-3.3YS</td><td><a href="http://www.newark.com/micrel-semiconductor/mic5209-3-3ys/ic-ldo-volt-reg-3-3v-0-5a-sot/dp/27K8454">Link</a></td><td>$1.37 </td><td>2</td></tr>
 <tr><td>CRYSTAL 16MHZ 12PF SMD</td><td><a href="http://www.digikey.com/product-detail/en/7A-16.000MAAE-T/887-1747-1-ND/3518797">Link</a></td><td>$0.61 </td><td>2</td></tr>
 <tr><td>Momentary switch (Reset)</td><td><a href="https://www.sparkfun.com/products/8720">Link</a></td><td>$0.95 </td><td>2</td></tr>
 <tr><td>AVR_SPI_PRG_6PTH 2x3</td><td><a href="https://www.sparkfun.com/products/12807">Link</a></td><td>$0.50 </td><td>2</td></tr>
 <tr><td>POWER_JACKPTH</td><td><a href="https://www.sparkfun.com/products/119">Link</a></td><td>$1.25 </td><td>2</td></tr>
 <tr><td>Capacitance 1206 12pF</td><td><a href="http://www.digikey.com/product-detail/en/C1206C120J5GACTU/399-1193-1-ND/411468">Link</a></td><td>$0.19 </td><td>4</td></tr>
 <tr><td>Capacitance 1206 0.1uF</td><td><a href="http://www.mouser.com/ProductDetail/Syfer/1206Y0500104KXT/?qs=r3IEBt6%2FMeZ3KBQffvN57w%3D%3D">Link</a></td><td>$0.63 </td><td>4</td></tr>
 <tr><td>Capacitance 1206 10uF</td><td><a href="http://www.mouser.com/ProductDetail/AVX/1206YD106KAT2A/?qs=sNvo50zR1xOBLrOnxv%2FIZg%3D%3D">Link</a></td><td>$0.42 </td><td>4</td></tr>
 <tr><td>Resistance   1206 330</td><td><a href="http://www.mouser.com/ProductDetail/Panasonic/ERJ-P08J331V/?qs=sGAEpiMZZMtlubZbdhIBINKPHGpBD%2fvffjkmsXAeubM%3d">Link</a></td><td>$0.10 </td><td>2</td></tr>
 <tr><td>Resistance   1206 10k</td><td><a href="http://www.mouser.com/ProductDetail/Vishay-Dale/CRCW120610K0FKEA/?qs=sGAEpiMZZMtlubZbdhIBIMdo0kq%2fvYo37iylNU1bei0%3d">Link</a></td><td>$0.04 </td><td>4</td></tr>
 <tr><td>LED1206 Red</td><td><a href="http://www.digikey.com/product-detail/en/LTST-C230EKT/160-1187-1-ND/269259">Link</a></td><td>$0.36 </td><td>2</td></tr>
 <tr><td>LED1206 Green</td><td><a href="http://www.digikey.com/product-detail/en/LTST-C230KGKT/160-1456-1-ND/386854">Link</a></td><td>$0.37 </td><td>2</td></tr>
 <tr><td>Atmega 28 pin socket</td><td><a href="http://www.digikey.com/product-detail/en/4828-3004-CP/3M5480-ND/1133633">Link</a></td><td>$0.77 </td><td>2</td></tr>
 <tr><td>1" Standoffs</td><td><a href="https://www.sparkfun.com/products/10738">Link</a></td><td>$3.95 </td><td>1</td></tr>
 <tr><td>1/4" Screws</td><td><a href="https://www.sparkfun.com/products/10453">Link</a></td><td>$1.50 </td><td>1</td></tr>
 <tr><td>Female Headers</td><td><a href="https://www.sparkfun.com/products/11269">Link</a></td><td>$1.50 </td><td>3</td></tr>
 <tr><td>1x06 male header for ftdi</td><td><a href="http://www.digikey.com/product-detail/en/68002-408HLF/609-3406-ND/1487482">Link</a></td><td>$0.28 </td><td>2</td></tr>
</table>
