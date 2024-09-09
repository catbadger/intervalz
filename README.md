# Intervalz

Intervalz is a PHP and JavaScript-based interval timer using jQuery, designed for period-based High-Intensity Interval Training (HIIT) workouts. 
Originally created for my morning kettlebell workout, this tool provides a simple, understandable, well formatted tool for paying attention to work and rest periods during your workout.

## Features

- **Customizable Work and Rest Times**: Set work and rest periods for adjustable symetrical tabata
- **Instructions**: Display instructions for each work set in the blue instruction area.
- **Progress Tally**: View the number of completed intervals and total elapsed time.
- **Sound Alerts**: Receive audio notifications for starting sets and when all intervals are completed.
- **Pause/Resume/Reset Functionality**: Pause, resume or reset your timer as needed.

## Usage

1. Open the Intervalz tool in your web browser
2. Use the play/pause button at the bottom right to control the timer
3. Complete sets
4. Get fitter

## Customization

You can easily customize the work sets by editing variables at the top of the `intervalz.js` file:

- `rest`: Length of rest periods in seconds.
- `dur`: Length of work periods in seconds.
- `works`: Array of exercise instructions for each set.

## Sound Alerts
Intervalz includes sound alerts for different status changes:
- `Starting a Work Set`: A specific sound plays to signal the beginning of a work interval.
- `Starting a Rest Set`: A different sound plays to indicate the start of a rest interval.
- `All Intervals Completed`: A concluding sound plays when all intervals are finished.
  
## Development
Intervalz was initially developed in a few hours to meet personal HIIT training needs. It's built using PHP, JavaScript, and jQuery.

## Future Improvements
- Add a user interface for customizing workouts without editing the JavaScript file.
- Create a mobile-friendly version.
