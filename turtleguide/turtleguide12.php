<html>

<head>

<title>Turtle guide and formulas</title>

<LINK REL=StyleSheet HREF="stylesheet.css" TYPE="text/css" MEDIA="screen,print">

</head>           

<body class=green>

<div class=green>
<a href="turtleguide2.php">Basics</a>
<a href="turtleguide6.php">Short forks</a>
<a href="turtleguide8.php">2.4 formula</a>
<a href="turtleguide14.php">Banpao formula</a>
<a href="turtleguide17.php">High angle formulas</a>
<a href="turtleguide19.php">Skybomb SS</a>
<a href="turtleguide21.php">Timebomb SS</a>
<a href="turtleguide27.php">Long forks</a>
<a href="turtleguide29.php">FAQs</a>
</div>

<h1>2.4 formula - Part 3</h1>
<h1>Advanced wind adjustment</h1>
<hr>
<blockquote>
<b>Problem 1: Calculated angle is below 60.</b>
<p>
Let's say your enemy is almost 1 screen away, at a basic angle
of 61. The wind is pointing 6 against you. Following the windchart,
you will lower 3 angles. Now your angle is 58. But here's the problem:
This formula and windchart were never meant for angles below 60.
If you have to use angles lower than 60, it means the wind is pointing
against you so much that there's no way to shoot far enough without
adding power.
<p>
In this case, the problem is that if you use angle 58 with your usual 0-wind
power (2.5 bars) then your shot would fall short a little bit. So to fix this, you
must add .05 to .1 bars of power. You might be wondering "couldn't I just lower my
angle even more, until the shot goes far enough?" ... The answer in this case is that you
<i>could</i>, but then it would be much harder to use the windchart. It's better to always
adjust 3 angles than to have to remember some rule like "adjust 3, unless your angle
ends up lower than 60, then adjust 5-6". It's just easier to remember to add a bit of power
every time your angle is below 60. In some winds, it doesn't matter how much you lower
your angle, you MUST add power to make the shot go far enough.
So... I'd use angle 58, 2.55 bars in this situations. In other situations I may add more power.
The lower your calculated angle is, the more power you must use in opposite wind.
When my calculated angle is 58, I'll use about 2.55 bars for 1 screen, but
if my calculated angle is 49, I'd add even more power and shoot with maybe 2.6 or
2.65 bars. Once your calculations start giving you very low angles like this, you really
should switch to another formula... the 2.4 formula isn't suited for this kind of wind.
<p>
<b>Problem 2: Your starting angle is low (in the 60's) and wind is towards the enemy</b>
<p>
The 2.4 windchart is really based on using angle 75 as a sort of 'average' angle. But
no windchart can cover 30 different angles, from 90 to 60, and be perfect. By making
a windchart based around angle 75, you will get the correct shooting angle <b>most</b>
of the time. The exception is when your starting angle is very low, like in the 60's.
In this wind, tailwind will have greater effect and will need a larger angle change than
usual. For for example, if the enemy is 1 screen away, and the wind is blowing at 20
strength up+towards them, then normally you'd follow the chart and do 20 * .7 to get
14. You'd raise 14 angles, from 60 to 74. But if you shoot with angle 74, 2.5 bars... then
the shot will fly too far, past the 1 screen mark. Since I don't want to memorize special
rules for changing angle, I fix this problem by reducing my power. With experience
you'll be able to figure out what kinds of winds are so strong that you must lower power
a bit in addition to changing your angle.
<p>
<b>Problem 3: Your starting angle is high (in the 80's)</b>
<p>
Once again the wind effect can be stronger than you expect. If you are
shooting a half screen shot, and the wind is up+against you, then it would
be ok to lower 5 angles in 15 wind. It's a wind factor of .35. But if your starting
angle is 87 (the enemy is right next to you) and you lower to angle 82, then
your shot might fly backwards too much and hit the land between you and the
target. That's because your angle is so close to 90, this kind of wind has maximum
effect on a shot that's travelling straight up and down. The same applies to wind
blowing towards the enemy. If it's 10 wind blowing up+forward (wind factor .7)
and you raise from angle 83 to angle 90, your shot will probably fly past them.
<p>
As if that wasn't bad enough, some wind directions have less effect than you think
when your starting angle is near 90, which you'll need experience to figure out.
Just remember this general rule: For very close shots with 2.4, you should
adjust 1 angle more than usual... lower 12 instead of 11 angles in
20 opposite wind, for example.
<p>
<b>Problem 4: You must backshot</b>
<p>
A backshot can be calculated like any other shot. Any time you calculate an angle higher
than angle 90, you can do a backshot. But the hard part is knowing how the wind's effect
will be altered by the fact that you switch from shooting 'with' the wind to shooting against it.
For example, let's say the wind is pointing up+forward with wind strength of 10.
The enemy is right next to you (0 wind angle would be 88). 
The wind factor shown for up+towards wind is .7, so in 10 wind... you need to raise
7 angles. After raising 2 angles, to 90, you then must go 5 angles in the other direction.
So you'd shoot with angle 85 (backwards), 2.4, and you'll get a nice backshot, right?
<p>
Well, not exactly.<br>
See, when you're shooting backwards, it's like you're shooting against the wind at first.
Look at this wind:
<p>
<img src="examplebackshot.gif">
<p>
If you saw this wind, you'd use a wind factor of .35. So in theory, if you started at angle 90
and lowered to angle 87, your shot would more or less hit you in the face or maybe land a hair
behind you. This is called your "tk angle" because it's the angle that causes you to damage
yourself, the same way angle 90 would if you were shooting in 0 wind.
So in the earlier backshot angle, you're shooting facing left, and the wind is blowing
right, towards the enemy. You're starting out shooting against the wind. Your TK angle is 87.
So if you tried angle 85 to make a backshot, your shot not only will fail to hit
the enemy, it won't even backshot... it'll land right in front of you.
<p>
So whenever you think you can backshot, you must first treat the wind as opposite wind,
and figure out your 'tk angle'. The tk angle is simply angle 90 - wind * wind factor.
Then figure out how many angles to raise from your tk angle to make the shot travel 
far enough to hit the enemy. Like, if wind is 20 blowing to the right, and my enemy is
about 5 angles/parts away from me, I would face left, and calculate my tk angle.
the wind factor is .6, and .6 * 20 is 12. So I'll lower 12 angles (from angle 90 to angle 78).
If I were to fire with 2.4 bars of power, in theory my shot at angle 78 would fly up,
turn in the air, and come down right into my face. If I raise my angle from this point,
it will land behind me. Since the enemy is 5 parts behind me, I raise my angle by
5 from this magical 'tk angle' and get angle 83. So 83 will be a nice backshot.
<p>
Once you understand this, there's one more thing you should understand. 
You might remember earlier something I mentioned - 
when you shoot against the wind, or in downward wind,
the distance between angles gets smaller than usual, and in upward wind or tailwind,
the distance between angles is larger than usual. It's a small difference, but enough
to make a shot miss if you forget about it. Once the shot crosses over
Turtle's body (or maybe even before that point) it starts being carried
as if it had tailwind behind it. Tailwind makes the distance
between angles larger. So in the example I just gave, you raised 5 angles because
there's 5 parts of distance between you and the enemy. But in certain kinds of wind, mostly
up+towards the enemy, 5 parts may not always mean 5 angles when doing a backshot.
Because the distance between angles is greater, you might need to raise only 4 angles
because the wind is really carrying the shot a lot after it crosses over Turtle's body.
<p>
<b>Problem 5: Wind direction doesn't match anything on my windchart</b>
<p>
Sometimes the wind is only a little off from one of the basic wind directions on the
chart, other times it seems to be pointing exactly halfway between 2 factors.
There are several ways to handle this:<br>
1. If you can calculate quickly enough, calculate the angle adjustment for both factors.
Then use whatever angle is in between. For example, let's say the wind is pointing
halfway between straight back (wind factor .6) and up+back (wind factor .35). Wind
strength is 9. If wind were perfectly back, you'd adjust 5 angles. If wind were
up+back, you'd adjust 3 angles. So midway between 3 and 5 is... 4. Adjust 4 angles.
This won't always be perfect but it will be close.<br>
2. Another trick, which I like better and which is faster to calculate, is to choose
to treat the wind like one specific wind factor, then adjust your power a little depending
on whether the wind is pointing above or below that factor. If wind is pointing above the factor,
the shot is getting a little more help from the 'upwardness' of the wind and will therefore travel
further than you'd expect. If the wind is pointing below that factor, it brings the shot down a bit
faster and will travel shorter than expected.<br>
Using the above example again, with 9 wind pointing back and also up a bit, I could just
decide to treat it as perfectly opposite wind, which would require lowering 5 angles. But then,
because the wind is pointing a little bit upward, above the usual opposite wind factor,
I would lower power a hair (.05 is enough) to make sure it didn't fly too far.
<p>
Another example with a visual might help:
<p>
<img src="example5.gif">
<p>
If this wind were pointing perfectly towards the enemy, I'd raise 6 angles (it's close to .6 wind factor,
multiplied by 10 wind strength). But it's also down a bit. So I'd raise 6 angles and also add .05 bars.
</blockquote>

<a href="turtleguide13.php">NEXT >></a>

<hr class=type2>

</body>

</html>