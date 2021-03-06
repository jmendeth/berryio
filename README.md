BerryIO
=======

- **Description:** BerryIO is a web browser based control system for the RaspberryPi
- **License:** GPL Version 3
- **Platform:** Tested on Raspbian Wheezy (2012-09-18 and newer) may work on others
- **Requirements:** A Raspberry Pi running Raspbian and a decent web browser (Internet Explorer versions older than 8 are not supported)
- **Project Website:** [GitHub](https://github.com/NeonHorizon/berryio)

###Getting Started
[Installation Instructions](https://github.com/NeonHorizon/berryio/blob/master/INSTALL.README.txt)

[Contributing Code](https://github.com/NeonHorizon/berryio/blob/master/CONTRIBUTING_CODE.README.txt)

###Project Details

The long term aim of BerryIO is to enable developers to control the Raspberry Pi and its GPIO ports remotely from any device with a browser, without ever needing to connect a screen or keyboard to the Pi itself.

The way BerryIO works is once the Raspberry Pi has booted up (or if the connectivity changes) it automatically connects to the main wired or one of the predefined wireless networks and BerryIO emails the owner with a web link. They can then click the link and open the control panel in a browser (with their username and password).

There is also a command line interface, so you can issue commands directly to it over SSH or in scripting should you wish to.

For those interested in the technical details its mostly written in PHP which runs the back end for both the command line and the web browser interface (which is served with Apache). SPI control is written in C, the emailing is done with msmtp and the network can be managed by Raspians wpagui (although I hope to include functions in BerryIO to configure the network at some point).

**GPIO CONTROL PANEL**

![GPIO Control Panel](http://frozenmist.co.uk/downloads/berryio/IMAGES/gpio.png)

**SYSTEM STATUS PAGE**

![System Status Page](http://frozenmist.co.uk/downloads/berryio/IMAGES/system.png)

###License Information

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see [http://www.gnu.org/licenses/](http://www.gnu.org/licenses/).

###Credits

SPI module based on code from the Gertboard test suite:
Copyright (C) Gert Jan van Loo & Myra VanInwegen 2012

