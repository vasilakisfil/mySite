<?php

/****************************************************************************************
* This file contains the basic (plain html) functions
*****************************************************************************************/

require_once("includes.php");

/************************************************
* this function displays the header.It takes 2
* arguments:one for the displaying heading and one
* for number of heading
*************************************************/
function dispHeader($header,$curr=0,$num=1)
{
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Filippos Vasilakis</title>
<link href="css/reset.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--<link href="css/style2.css" rel="stylesheet" media="screen">-->
<!--<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="page">
  <aside id="sidebar">
    <nav><a class="logo" href="#top" id="nav-logo">
      <span>Personal Webpage Of</span>Filippos Vasilakis</a>
      <ul>
     	<li class="active" id="nav-1"><a href="#home">Home</a></li>
        <li id="nav-2"><a href="#work">Projects</a></li>
        <li id="nav-3"><a href="#publications">Publications</a></li>
        <li id="nav-4"><a href="#about">About</a></li>
        <li id="nav-5"><a href="#contact">Contact</a></li>
        <li id="nav-6"><a href="#stuff">Various Stuff</a></li>
        <li><a href="http://filippos.vasilak.is/blog/">Blog</a></li>
      </ul>
      <div class="bg_bottom"></div>
    </nav>
  </aside>
  <div id="main-content">
  	<section id="top"></section><!-- do not remove ;)-->
<?php
}

/************************************************
* this function displays the footer that is included
* in every webpage of the site.
*************************************************/
function dispHomeContent()
{
?>
    <section id="home">
      <header class="divider intro-text wrapper">
        <h2>Recent Projects and Research </h2>
      </header>
      
      <div class="recent_work">

      	<div class="clearfix says">

		<p class="mcontent" >
    I am working on a new paper with Prof. 
    <a href="http://www.cti.gr/RD1/nikole/">S. Nikoletseas</a>
    again in the field of WSNs. Specifically, our aim is to contrast a WSN
    employing both data mules (mobile relays) and mobile rechargers with a WSN
    equipped with a single mobile multi-entity which provides recharging and data muling on
    demand. Our goal is again to provide a rigorous analysis of the performance in each scenario
    and an adaptive algorithm that understands the underlying routing protocol and adjusts itself.
		</p>


		<p class="mcontent" >
    At the same time, I am studying Decentralized Social Networks which seem to have many
    challenging open problems. However, I trust that these networks could provide us with
    true anonymity, security and control over our data whith the vast user participation.
		</p>

		<p class="mcontent" >
		Last but not least, in my free time, I am expanding the capabilities of
    <a href="https://eventdb.herokuapp.com/" title="EventDB site">EventDB</a>, a centralized
    (but soon decentralized) RESTFul OSN in which everyone can upload new
    events or experiences. It is hosted in
    <a href="https://github.com/vasilakis/EventDB">github</a>
    in which everyone is welcomed to contribute given that
    Test Driven Development is followed.
		</p>

      </div>
<br /><br /><br /><br /><br /><br />
    </section> <!--end section-->
    
<?php
}

function dispWorkContent()
{
?>
    <section id="work" class="clearfix">
      <header class="wrapper">
        <h2>Completed Projects</h2>
      </header>
      <div id="mainDoc">
      <ul>
       <li id="red"><span id="red_span">Large Scale Projects</span>
	    <ul class="parP">
		 <li><span class="mainP">Development of a web application for house advertising, with management capabilities for Admins and users (HTML, CSS, Javascript, PHP, MySQL, AJAX, XML,Google Maps API, Apache Server)</span><br/>Actually, it is a complete site for classifieds which includes adminstration capabilities for users,ads and admin.It was developed with svn revision control. <a href="src/classifieds.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a> 
			<a href="http://vasilakisfil.dyndns.org/svn/earth/"><img src="images/svn.gif" style="width: 11px; height: 11px;" alt="image" /></a> <a href="http://vasilakisfil.dyndns.org/earth" class="links">link</a>
		 </li>
		 <li><span class="mainP">Design and implementation of a <a href="http://en.wikipedia.org/wiki/File_Allocation_Table" class="projLinks">FAT</a> File System and Shell (C, Posix API)</span> <br/>
			Here it is a virtual filesystem(since it use the existing filesystem).It compiles in any POSIX complient OS.It includes some
			low level C, but also a shell in which various commands can be excecuted.Press -help for more info.Makefile is included. <a href="src/FATFS.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
		 </li>
        </ul>
       </li>
        <br />
		<li id="orange"><span id="orange_span">Medium Scale Projects</span>
			<ul class="parP">
			<li><span class="mainP">Implementation of parallel versions of <a href="http://en.wikipedia.org/wiki/Conway's_Game_of_Life" class="projLinks">Conway's Game of Life</a> (C, Pthreads, OpenMP)</span><br />
				It has been implemented in phtreads and OpenMP.I have to admit that OpenMP is pretty fast for simple jobs.Makefile is included.  <a href="src/GameOfLife.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Parallel implementations of the <a href="http://en.wikipedia.org/wiki/Jacobi_method" class="projLinks">Jacobi algorithm</a> using OpenGL as graphic environement.(C, Linux IPC, PThreads, OpenMP)</span><br />
				This program calculates the tempreture of a 3dimensional object through the Jacobi algorithm method.It's nice to see the interpolation in
				real time.Also you can interact with the cube to move it.OpenGL environment was developed by K. Karantasis.I only did some encancements
				and I made the parallelised jacobi method with Pthreads and OpenMP.I have to mention though that from my experience OpenGL requires
				a very good knowledge of maths and geometry.  <a href="src/JacobiHeat.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Implementation of a lexical analysis and grammar parsing tools.(C, Flex, Bison)</span><br />
				It's a compiler for html!Heh actually, it dosen't create an executable file but instead it only checks for lexical or gramatical errors 
				on a given html file. <a href="src/HTMLCompiler.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Implementation of <a href="http://en.wikipedia.org/wiki/Miller–Rabin_primality_test" class="projLinks">Miller-Rabin priminality test</a> priminality test for arbitrary-precision numbers (C++, GNU GMP)</span><br/>
				It is capable of finding a prime number of 1500 digits in about 15 seconds.It also can check a 10000 digits number if
				it is prime in less than 5 seconds.What you probably know is that Miller-Rabin algorithm is a probalistic algorithm which relies in Fermat's little theorem.
				What you don't know is that in its original version proposed from Gary L. Miller, is deterministic, but the determinism relies on the unproven
				generalized Riemann hypothesis.Michael O. Rabin modified it to obtain an unconditional probabilistic algorithm, that's why it is called
				the Miller-Rabin algorithm.The arbitrary precision arithmetic was achieved using GNU GMP library. As with every GNU tool it has
				a complete and very helpful manual. If I had time I would also add GUI with Qt.
				It was developed with mercurial revision control system. Makefile is included.  <a href="src/millerrabin-algorithm-in-cplusplus.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Design and implementation of a client-server model through Posix using Linux Processes &amp; Threads.(C, Posix API)</span><br />
				Yet another client server communication.There two implementations:the first was developed throughIPC(InterProcess Comunication)
				and the second through pthreads.It was developed with mercurial revision control system.  <a href="src/ClientServerComm.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Implementation of <a href="http://en.wikipedia.org/wiki/Port_knocking" class="projLinks">port knocking</a>(C, Linux Sockets)</span><br />
				A client server program in which the client checks if the given ports are open in the server, a method which widely known
				as port knocking.Unfortunately comments are in greek.It was developed with mercurial revision control system. Makefile is included.  <a href="src/PortKnocking.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Implementation of parallel Versions of <a href="http://en.wikipedia.org/wiki/Prim's_algorithm" class="projLinks">Prim algorithm</a>(rather difficult !) (C, Pthreads, OpenMP)</span><br />
				Prim's algorithm is an algorithm that finds a minimum spanning tree for a connected weighted undirected graph.This version is
				a parallelised one.It is staggering to parallelise this algorithm because it works in "phases" and every phase needs the data
				of the previous phase.The parallelism lies on the greeiness of the algorithm.You can find a similar paper here.It was developed with mercurial revision control system.
				Makefile is included.  <a href="src/PrimAlgo.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Design and Development of a Train Tickets Booking Software.(C++)</span><br />
				A fully capable train booking system written in C++.I codeveloped it with my brother. <a href="src/BookingSystem.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Design and implementation of <a href="http://en.wikipedia.org/wiki/semaphores" class="projLinks">semaphores</a> and <a href="http://en.wikipedia.org/wiki/Readers-writer_lock" class="projLinks">readers-writers locks </a>(C, Posix API)</span><br />
				A mutual exclusion(mutex or write lock or semaphore) is a protected variable or abstract data type used in concurrent programming that 
				provides a simple but useful abstraction for controlling access by multiple processes to a common resource in a parallel programming environment.
				Semaphores are a useful tool in the prevention of race conditions; however, their use is by no means a guarantee that a program is free from 
				race conditions or even deadlocks.One classic example is the semaphores are used is in the producer-consumer problem. They were invented by Edsger W. Dijkstra.<br />
				On the other hand readers/writers locks is a similar concept that non only does it solve the producer-consumer problem but also adds the possiblity 
				of priority and avoids starvations(for example writers starvation in readers/writer problem).In most of the times priority locks are implemented 
				on top of semaphores.		
				<a href="src/Mutexes.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
	
			</ul>
		</li>
        <br />
		<li id="green"><span id="green_span">Small Scale Projects</span>
			<ul class="parP">
			<li><span class="mainP">Development of a program that finds all the prime numbers in a given range using <a href="http://en.wikipedia.org/wiki/Wilson's_theorem" class="projLinks">Wilson's theorem</a> through parallelism (C, Pthreads, OpenMP)</span><br/>
				It's a priminality test according to wilson's theorem which states: a natural number n > 1 is a prime number if and only if
				(n-1)! &#8801; -1(modn).Even though it is a parallelised version, Miller-Rabin priminality test is much faster. Mercurial revision control was used. Makefile is included.
				<a href="src/Primes.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Design and implementation of parallel array multiplication using threads (C, Pthreads)</span><br/>
				A rather classic implementation of parallel array multiplication. Perfect if you want to learn Pthreads. Developed with Mercurial. Makefile is included. 
				<a href="src/ParallelArrayMul.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Development of a database of a university library.(Mysql, Wamp Server)</span><br/>
				It includes E-R diagram, sql code and sql queries.  <a href="src/Databases.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			<li><span class="mainP">Development of a bash script that backups all files modified during specific time.(Bash scripting, linux commands)</span><br/>
				It's a bash script that backups all the files modified in /home directory and compresses them in a .gz or .bz2 archive depending on the given command line arguments.  <a href="src/Backup.zip"><img src="images/d1.jpeg" style="width: 11px; height: 11px;" alt="image" /></a>
			</li>
			</ul>
		</li>
		</ul>
</div>
    </section> <!--end section-->



<?php
}

function dispPubContent()
{
?>
    <section id="publications" class="clearfix">
      <header class="wrapper">
        <h2>Publications</h2>
      </header>

    <div>
    <ul>
    <li class="type"><span class="type_span">Bachelor's Thesis</span>
      <ul>
        <li><span class="publication"><a href="publications/undergraduate_thesis.pdf"> Efficient Energy Management in Wireless
          Rechargeable Sensor Networks</a> (abstract available in english)</span> <br />
          <span class="pubNames">Filippos Vasilakis</span> <br />
          <span class="pubPlace">Computer Engineering and Informatics Department, University of Patras, Greece, 2012</span>
        </li>
      </ul>
    </li>
    <br />
    <li class="type"><span class="type_span">Conference Publications</span>
      <ul>
        <li><span class="publication"><a href="publications/efficient_WRSNS_2012.pdf">Efﬁcient Energy Management in Wireless
          Rechargeable Sensor Networks</a></span> <br />
          <span class="pubNames">C. M. Angelopoulos, S. Nikoletseas, T. P. Raptis, C. Raptopoulos and F. Vasilakis</span> <br />
          <span class="pubPlace">Accepted in the 15th ACM International Conference on Modeling, Analysis and Simulation of Wireless
           and Mobile Systems 2012 (ACM MSWiM ’12), Paphos, Cyprus</span>
        </li>
        <br />
        <li><span class="publication"><a href="publications/cBox_eureka11.pdf"> cBox: A
          decentralized system for resources sharing that enables peer communication in an heterogeneous environment</a></span> <br />
          <span class="pubNames">K. Akasoglou, A. Baltas, E. Gkatziouras, N. Kapetanos, D. Karavias, K. Moustakakis, G. Oikonomou,
          N. Palaghias, G. Papaneofytou, N. Triantafyllis, F. Vasilakis, O. Akribopoulos, C. Koninis, M. Logaras and
          I. Chatzigiannakis<span> <br />
          <span class="pubPlace">Eureka! Conference, October 2011, Kastoria, Greece</span>
        </li>
      </ul>
    </li>
    <li class="type"><span class="type_span">Talks</span>
      <ul>
        <li><span class="publication">New challenges that emerge from Wireless Recharging Sensor Networks</span> <br />
          <span class="pubNames">Filippos Vasilakis</span> <br />
          <span class="pubPlace">Computer Engineering and Informatics Department, University of Patras, Greece, February 2012</span>
        </li>
      </ul>
      <br />
      <ul>
        <li><span class="publication"><a href="publications/multiple_sinks.pdf">State of the Art research on WSNs
          with multiple mobile Sinks</a></span> <br />
          <span class="pubNames">Filippos Vasilakis</span> <br />
          <span class="pubPlace">Computer Engineering and Informatics Department, University of Patras, Greece, joined talks that took place between October 2011 and January 2012</span>
        </li>
      </ul>
      <br />
      <ul>
        <li><span class="publication"><a href="http://blip.tv/fosscomm2011/cbox-communicate-anytime-anyplace-anyhow-5168637">Porting Wiselib's concepts in Android using JNI</a></span> <br />
          <span class="pubNames">Filippos Vasilakis </span> <br />
          <span class="pubPlace">part of cBox presentation, FOSSCOMM, Patras, May 2011</span>
        </li>
      </ul>
    </li>
    </ul>
    </div>

	</section>
<?php
}

function dispAboutContent()
{
?>
    <section id="about" class="clearfix">
      <header class="wrapper">
        <h2>About Me</h2>
      </header>
      
      
      <figure class="marginRight"><img src="images/me.jpg" alt="Image" width="240px" /></figure>
        <p class="info">I am a graduate student of <a href="http://www.ceid.upatras.gr/">Computer Engineering and Informatics</a>
                            (CEID) of University of Patras. I have
                            just finished my <a href="http://filippos.vasilak.is/files/thesis.pdf">thesis</a> supervised by
                            Professor <a href="http://www.cti.gr/RD1/nikole/">S. Nikoletseas</a> in wireless rechargeable sensor
                            networks. My
                            work involved theoretical research of graph and probability models (my favourite) in order to achieve
                            novel results in the area of sensor networks that exploit mobile rechargers. A
                            <a href="http://filippos.vasilak.is/files/manuscript.pdf">part</a> of my thesis was
                            appeared as a publication in <a href="http://mswimconf.com/2012/">MSWIM 2012</a> conference.</p>


		<p class="info">In general, my intention is to solve <em>real world</em> problems using science, especially mathematics.
                           I believe that behind every practical solution there is an extensively mathematical model that can
                           characterize its performance evaluation. I always tend to lie in between theoretical foundations of
                           computer science and software engineering for the implementation of these practical solutions.</p>

        <p class="info"> In the past I have worked in various projects, most notably the <a href="https://github.com/CEID-DS/cbox">
                            cBox</a> system which is a collection
                            of services, libraries and applications that can be used to share resources, such as Internet connectivity,
                            with other members of an ad-hoc network, in a transparent and safe way. The system features include delay
                            tolerant networking, caching of the web requests and fully decentralized operation using well established
                            technologies such as ZeroConf, mDNS to allow the devices to discover compatible services. I was heading the
                            AndroidWiselib team which aimed to porting <a href="https://github.com/ibr-alg/wiselib/wiki">
                            Wiselib</a> library(C++) in Android using JNI and Native Developement
                            Kit. It involved C/C++ code wrapped in Java code using native interfaces. The cBox project led to 
                            <a href="http://ru1.cti.gr/projects/easysense/export/1872/cbox/eureka11.pdf">1 paper</a>
                            under the supervision of <a href="http://ru1.cti.gr/~ichatz/">Dr. I. Chatzigiannakis</a>.</p>




        <br />



        <h3>Research Interests</h3>
          <ul>
            <li><span class="type_span2">Wireless Sensor Networks</span><br />
              <p class="info">Almost one decade later, although enormous progress has been made in wireless sensor networks (WSNs),
                 these networks still challenge scientists to solve the problem of minimizing energy consumption and maximizing network
                 efficiency.
                 Algorithms and models for such networks are in my interests, particularly in energy balance tecniques, WSNs that
                 exploit mobile Sinks and lately WRSNs, that is, WSNs that exploit mobile chargers in order to increase network
                 lifetime.</p>
            </li>

            <li><span class="type_span2">Online Social Networks</span><br />
              <p class="info">OSNs have many similarities with WSNs but they differentiate in many aspects too due to the social factor.
                Nevertheless, I am very interested in the challenges that Distributed OSNs oppose. I believe that these networks
                could be
                used extensively due to the safe privilidges they provide. However, there are many open problems in this field that
                should be addressed and solved in order to fully exploit these networks.</p>
            </li>

            <li><span class="type_span2">Distributed Systems</span><br />
              <p class="info">Anything that is distributed really triggers my interest. Nonetheless, distributed algorithms for
                 Routing and Flow control in data networks spark my research feeling.</p>
            </li>
          </ul>

          



       <p class="info"> I am also interested in the software engineering perspective in order to build such complex distributed
                 applications. </p>

        <h3>Technical Skills</h3>

        <table border="0" class="info">
          <tr>
            <td class="maint" style="float: right; text-align: right;">Programming Languages:&nbsp;&nbsp;&nbsp;</th>
            <td class="detailst">C, C++, Java, Ruby, Matlab, ARMv7 Assembly, Bash scripting</th>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Frameworks:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">POSIX, OpenMP, Qt, Boost, GNU GMP, JNI, Android NDK, SDK, BlueZ, Wiselib</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Web Development:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">HTML/XHTML, CSS, Javascript, Ruby on Rails, PHP, MySQL, Ajax, XML, Google Maps API, Apache Server</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Testing:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Rspec, Capybara and lately Jasmine</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Versioning Systems:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Git, Mercurial, Subversion</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Utilities:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Vim, GNU Make, GNU Bison, GNU Flex, TeX, <span class="texhtml" style="font-family:
                 'CMU Serif',
                 'Times New Roman', Times, 'Nimbus Roman No9 L', serif;">L<span style="text-transform: uppercase; font-size: 70%;
                 margin-left: -0.36em; vertical-align: 0.3em; line-height: 0; margin-right: -0.15em;">a</span>T<span
                style="text-transform: uppercase; margin-left: -0.1667em; vertical-align: -0.5ex; line-height: 0;
                margin-right: -0.125em;">e</span>X</span></td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">Operating Systems:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Linux/Unix, Windows</td>
          </tr>
        </table>
        <br />
        <br />
        <br />
       <p class="info" style="text-align: center">You can download my full resume from
        <a href="files/FilipposVasilakis.pdf" class="mainP">here</a> . </p>
    </section> <!--end section-->



<?php
}

function unusedContent()
{
?>

      	<div class="clearfix says">
        <figure class="marginRight"><img src="images/client_image_1.jpg" alt="Image" /></figure>
		<blockquote>
		<p class="par" >
		My name is Filippos Vasilakis and I welcome you to my new personal website! I hope you enjoy your staying!
		I am curently an undergraduate student in <a href="http://www.ceid.upatras.gr" class="links">Computer Engineering and Informatics</a>
		at university of <a href="http://en.wikipedia.org/wiki/Patras" class="links">Patras</a>. The school requires 
		5 years of study and I am currently on the 5th year. Checkout also my newly created <a href="blog/index.php" class="links">blog</a>!
		</p>
		<p>Filippos Vasilakis <span class="date"> Tuesday, 11 January 2011 </span></p>
		</blockquote>
        </div>

        <h3>Languages</h3>

        <table border="0" class="info">
          <tr>
            <td class="maint" style="float: right; text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greek:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Native</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">English:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Fluent, C2, Cambridge &amp; Michigan, Certificates of Proficiency in English</td>
          </tr>
          <tr>
            <td class="maint" style="float: right; text-align: right;">French:&nbsp;&nbsp;&nbsp;</td>
            <td class="detailst">Advanced, B2, Diplome d’etudes en langue francaise</td>
          </tr>
        </table>

        <br />
        <br />

        <h3>Interests and Activites</h3>
Tennis, Paintball, Open-Source, Music, Technology, Programming, Cinema

       <div class="my-services columns">
        <h3>Research Interests</h3>
        <div class="three-column mainc">
          <h4>Wireless Networks</h4>
          <p> WSNs, Wireless Actor Sensor Networks, Wireless Rechargeable Sensor Networks (WRSNs), Mobile Networks,
            Fault-tolerant Networks, Mesh Networks.</p>
          <p> Algorithms and models for such networks are in my interests</p>
        </div>
        <div class="three-column mainc">
          <h4>Online Social Networks</h4>
          <p>OSNs have many similarities with WSNs but they differentiate in many aspects too due to the social factor. Nevertheless, I am
            very interested in the challenges that Distributed OSNs oppose. I believe that these networks could be
            used extensively due to the safe privilidges they provide. But there are many open problems in this field that should be addressed
            and solved first.</p>
        </div>
        <div class="three-column">
          <h4>Distributed Systems</h4>
          <p>Anything that is distributed really triggers my interest. Nonetheless, distributed algorithms for Routing and Flow control in
            networks spark my research feeling.</p>
        </div>

        <div class="three-column last">
          <h4>Identity / Branding</h4>
          <p>This is just a place holder for people who need type to visualize what the actual copy might look like if it were real content. This is just a place holder for people who need type to visualize what the actual copy might look like if it were real content.</p>
        </div>

      </div>
       	<div class="clearfix"></div>
        <h3>Nerdy Skills</h3>
        <ul class="skills">
        	<li>Design <span class="bar_100"><span class="percent">100%</span></span></li>
        	<li>HTML5 / CSS3 <span class="bar_90"><span class="percent">90%</span></span></li>
            <li>Wordpress / CMS<span class="bar_50"><span class="percent">50%</span></span></li>
            <li>jQuery<span class="bar_70"><span class="percent">70%</span></span></li>
            <li>Search Engine Optimzation<span class="bar_60"><span class="percent">60%</span></span></li>
        </ul>
        

<?php
}


function dispContContent($report=NULL)
{
?>

    <section id="contact" class="clearfix">




      <header>
      <div class="wrapper">
        <h2>Get in Touch</h2>
            <ul class="social">
            	<li class="website" title="website"><a href="http://filippos.vasilak.is">Website</a></li>
                <li class="github" title="github"><a href="https://github.com/vasilakis">Github</a></li>
                <li class="bitbucket" title="bitbucket"><a href="https://bitbucket.org/vasilakis">BitBucket</a></li>
                <li class="blog" title="blog"><a href="http://filippos.vasilak.is/blog">Blog</a></li>
                <li class="email" title="email"><a href="mailto:vasilakisfil{removethis}@gmail.com">email</a></li>
            </ul>
       </div>
      </header>

      
      <form action="#" method="post">
      	<p><input type="text" name="name"  value="Your Name" id="name" onblur="if (this.value == ''){this.value = 'Your Name'; }" onfocus="if (this.value == 'Your Name') {this.value = '';}" /></p>
        <p><input type="text" name="email" value="Your Email" id="email"  onblur="if (this.value == ''){this.value = 'Your Email'; }" onfocus="if (this.value == 'Your Email') {this.value = '';}" /></p>
        <p><input type="text" name="url" value="Your Site" id="url" onblur="if (this.value == ''){this.value = 'Your Site'; }" onfocus="if (this.value == 'Your Site') {this.value = '';}" /></p>
        <p><textarea cols="20" rows="7" name="message" id="message" onblur="if (this.value == ''){this.value = 'Your Message'; }" onfocus="if (this.value == 'Your Message') {this.value = '';}" >Your Message</textarea></p>
        <p><input type="submit" name="submit" value="Send Message" class="button" /></p>
      </form>
    </section> <!--end section-->


<?php
}

function dispStuffContent()
{
?>
    <section id="stuff" class="clearfix">
      <header class="wrapper">
        <h2>Various Stuff</h2>
      </header>
        <p class="info">I may post here various interesting stuff that I may come accross while I surf the Internet
        or stuff that was introduced to me by others..</p>


      <ul>
        <li><a href="http://gizmodo.com/5910223/how-yahoo-killed-flickr-and-lost-the-internet"><span class="type_span2">
            How Yahoo Killed Flickr and Lost the Internet</span></a><br />
          <p class="info"></p>
        </li>

        <li><a href="http://youarenotsosmart.com/2010/10/27/procrastination/"><span class="type_span2">
            Procrastination</span></a><br />
          <p class="info">A psychological reflection that few poeple can manipulate..</p>
        </li>

        <li><a href="http://en.wikipedia.org/wiki/Nazca_lines"><span class="type_span2">
            Nazca Lines</span></a><br />
          <p class="info">Huge ancient geoglyphs created by the interesting but mysterious Nazca civilization..</p>
        </li>


      </ul>

    </section> <!--end section-->

<?php
}

/************************************************
* this function displays the footer that is included
* in every webpage of the site.
*************************************************/
function dispFooter()
{
?>
  </div>
</div>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script> 
<script type="text/javascript" src="js/jquery_003.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
<?php
}

function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '')
{

	$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	$ret=mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header_ . $header);
	return $ret;
}


?>
