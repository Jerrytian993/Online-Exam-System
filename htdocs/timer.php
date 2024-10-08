<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
$timer_unit: 1s
$timer_length: 15
$timer_delay: 1s

$starting_hue: 160
$hue_increment: 360 / $timer_length

@mixin scale_timer($scale)
  $x: $scale
  width: 50vmin * $x
  height: 50vmin * $x
  box-shadow: 0 0 0 (1.25vmin * $x), inset (2.5vmin * $x) (2.5vmin * $x) (5vmin * $x) rgba(black, 0.125), (2.5vmin * $x) (2.5vmin * $x) (5vmin * $x) rgba(black, 0.125)
  font-size: 25vmin * $x


html
  box-sizing: border-box

*, *:before, *:after
  box-sizing: inherit

body
  height: 100vh
  animation: ($timer_unit * $timer_length) ($timer_delay - $timer_unit * 0.125) cubic-bezier(0.9, 0, 0.1, 1) 


div
  +scale_timer(1.5)
  position: absolute
  top: 50%
  left: 50%
  transform: translate(-50%, -50%)
  display: flex
  align-items: center
  justify-content: center
  overflow: hidden
  color: white 
  border-radius: 50%
  font-weight: 700

  @media (min-width: 600px)
    +scale_timer(1)

  &:before
    content: '#{$timer_length}'
    animation: ($timer_unit * $timer_length) $timer_delay forwards timer_countdown, $timer_unit ($timer_delay - $timer_unit * 0.125) $timer_length timer_beat

    @at-root
      @keyframes timer_beat
        40%,
        80%
          transform: none
        50%
          transform: scale(1.125)

    @at-root
      @keyframes timer_countdown
        @for $i from 0 through $timer_length
          #{100% / $timer_length * $i}
            content: '#{-$i + $timer_length}'

  &:after
    content: ''
    position: absolute
    top: 0
    left: 0
    z-index: -100
    width: 100%
    height: 100%
    background-color: red
    animation: ($timer_unit * $timer_length) $timer_delay linear forwards timer_indicator

    @at-root
      @keyframes timer_indicator
        100%
          transform: translateY(100%)

	</style>
</head>
<body>
	<div></div>

</body>
</html>