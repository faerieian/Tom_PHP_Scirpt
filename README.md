# Tom_PHP_Scirpt
Date and QR Code Tools
This project consists of two PHP scripts for working with dates and QR codes, as well as an HTML file that allows users to interact with the scripts via a web interface. The scripts are designed to be easy to use and require no advanced technical knowledge.

Features
ATest
ATest is a script that takes two dates as inputs and calculates the number of days between them. The user can enter the dates in the format YYYY-MM-DD. The result is displayed as an image file that can be downloaded to the user's device. The image is created using the GD library in PHP.

BTest
BTest is a script that converts a string to a QR code. The user can enter any string they wish to convert to a QR code. The result is displayed as an image file that can be downloaded to the user's device. The image is created using the PHP QR Code library.

User Interface
The index.html file provides a simple web interface for using ATest and BTest. The user can enter the required inputs in text boxes and submit them to the PHP scripts via AJAX POST requests. The results are displayed on the page, and the user can download the resulting images by clicking on them.

Installation
To use this project, you will need to have PHP and a web server installed on your computer. You will also need to have the GD library and the PHP QR Code library installed. In addition, the project uses the Tailwind CSS framework and a task runner (Grunt) to automate the build process. To install these dependencies, follow these steps:

Clone the repository to your local machine
Install Node.js and npm (if you haven't already)
Open a terminal or command prompt and navigate to the project directory
Run npm install to install the required dependencies (including Tailwind CSS and Grunt)
Run grunt to compile the CSS and start the watcher
Usage
To use the project, simply open the index.html file in your web browser. Enter the required inputs in the text boxes and click the "Calculate" or "Create QR Code" button. The result will be displayed on the page, and you can download the resulting image by clicking on it.

License
This project is released under the MIT License. You are free to use, modify, and distribute the code as you wish, but please credit the original author and include a link back to this repository.

Yahooo wooooowoooo By Tom