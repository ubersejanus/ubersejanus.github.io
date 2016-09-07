---
layout: post
title: Building a PC
author: bradp
hero:
tags:
- computer
---

Building my first computer from scratch, how exciting!

<!--more-->

Well, not First-first. Back in high school I did a subject that involved tearing apart a pile of old computers and making your own, and I've assembled PCs based on parts lists made by others.

But this is the first time I've chosen a list of things and then put them all together myself.

So, to the shopping list!

|---|---|---|
| ![case](/blog/assets/2016-06/case.jpg) |**[Antec Three Hundred U3 ATX Mid-Tower Computer Case](http://www.amazon.com/Antec-Three-Hundred-Two-Gaming/dp/B006TVQTHW/)**<br>My HTPC has a snappy looking Antec case, which I quite like. This one has similar looks, but is bigger.|$62|
| ![power supply](/blog/assets/2016-06/ps.jpg) |**[Fractal Design Tesla R2 500W 80+ Gold Certified ATX Power Supply](http://www.amazon.com/Tesla-R2-500W-FD-PSU-TS2B-500W--/dp/B00CFX3DKO/)**<br>500 watts is more than what I need for now.|$119|
| ![motherboard](/blog/assets/2016-06/mb.jpg) |**[Gigabyte GA-H170-D3H ATX Motherboard](http://www.amazon.com/Gigabyte-SDRAM-NA-Motherboards-GA-H170-D3H/dp/B015Y3UNHM)**<br>I trust the brand and it has all the ports I want.| $169 |
| ![processor](/blog/assets/2016-06/process.jpg) |**[Intel Core i5-6600 Skylake 3.3GHz Quad-Core Desktop Processor BX80662I56600](http://www.amazon.com/Intel-I5-6600-FC-LGA14C-Processor-BX80662I56600/dp/B0136JONRM/)**<br>I went with the top-of-the-line i5 processor as the i7s add cores more than speed.| $308 |
| ![RAM](/blog/assets/2016-06/ram.jpg) |**[Kingston Fury 16GB Kit (2x8GB) DDR4-2666 Memory](http://www.amazon.com/Kingston-Technology-16-PC4-19200-HX426C15FBK2/dp/B013H7QYEI/)**<br>The motherboard has 4 RAM slots, so this will likely become 32GB eventually.| $98 |
| ![M2](/blog/assets/2016-06/m2.jpg) |**[Samsung 850 EVO 120GB M.2 Solid state drive MZ-N5E120BW](http://www.amazon.com/Samsung-850-EVO-3-5-Inch-MZ-N5E120BW/dp/B00TGIVY1G)**<br>M.2 drives are basically SSD hard disks directly plugged into the motherboard. This is the OS drive.| $95 |
| ![hard disk](/blog/assets/2016-06/hd.jpg) |**[Western Digital Blue 2TB 3.5" 5400RPM Internal Hard Drive](http://www.amazon.com/Seagate-Desktop-3-5-Inch-Internal-ST2000DM001/dp/B005T3GRN2/)**<br>Of course, such a tiny system drive needs a proper-sized data disk.|   |
| ![hard disk](/blog/assets/2016-06/hd.jpg) |**[Western Digital Red 3TB 3.5" 5400RPM Internal Hard Drive](http://www.amazon.com/Seagate-Desktop-3-5-Inch-Internal-ST2000DM001/dp/B005T3GRN2/)**<br>The WD Red range is designed for NAS and file servers, and will also be responsible for doing local backups of both the OS and data drives.|   |
| ![dvd](/blog/assets/2016-06/dvd.jpg) |**[Asus DRW-24D3ST Internal DVD/CD Writer](http://www.amazon.com/Asus-Serial-ATA-Internal-Optical-DRW-24B1ST/dp/B0033Z2BAQ)**<br>Optical media may be dead, but it's still useful to be able to read them when they do show up.| $17 |
| ![heatsink](/blog/assets/2016-06/heat.jpg) |**[Noctua NH-U12S CPU Cooler](http://www.amazon.com/Noctua-NH-U12-Sockets-Heatpipe-Cooling/dp/B00C9EYVGY)**<br>Heatsink. Sinks heat.| $89 |
| ![graphics card](/blog/assets/2016-06/graphic.jpg) |**[ms](http://www.amazon.com/MSI-R9-390X-GAMING-8G/dp/B00ZGF158A/)**<br>To be honest, [PC Part Picker](https://au.pcpartpicker.com/) suggested this and I don't know enough to disagree.|   |
| ![OS](/blog/assets/2016-06/win10.jpg) |**[Microsoft Windows 10 Pro (64-bit)](http://www.amazon.com/Microsoft-Windows-System-Builder-Disc/dp/B00ZSHDJ4O)**<br>Shelled out a little extra for Pro, because it's worth it. Went with 10 as Windows 7 is almost 7 years old now. |   |
|   |<span style="text-align:right; font-weight:bold;">Total</span>| **$1,xxx** &nbsp;  |

Once I decided what I wanted to put together, the first part of this project was to reassemble my Ikea desk so that the little PC hutch that used to be on my left side is now on the right. This simple change makes the desk feel approximately four trillion times larger.

Then it was a simple matter of buying what I wanted and putting all the Tab As into the various Slot Bs. Building a computer is still a surprisingly simple thing to do, and so once I finally got all the parts together, I was able to put the last bits in and power up!

Once Windows was loaded, the first order of business was to start mucking about with system settings!

First thing I changed was to move the temp and tmp files off the system drive into D:/WINFILES/TEMP

I think that the hibernate mode is a bit dumb, so that was the next on the chopping block.

Setting up Windows Backup was a bit tricky, but mainly that's because I'm using an internal hard disk and I had to figure out how to schedule the Diskpart /s command to hide and show the backup drive at the suitable times. I'll have to wait until Tuesday to see if it works for realsies, though. I'll have to setup my BIOS to auto-boot in time for that too - REMINDER, HAVE YOU DO THIS?

Windows has made it easier to move file install locations away from the system drive though, so that's nice. The Storage system setting is where those mouse-clicks can be found.

Since I'm setting up a PC, it's time to install antivirus. I like Avast! Free Antivirus &mdash; both because it comes highly recommended, and also because I can pretend to be a pirate. I also run MalwareBytes Anti-Malware once a week in case anything does get through as I'm suspicious like that (also on scheduled tasks)



