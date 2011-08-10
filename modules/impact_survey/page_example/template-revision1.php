

<html> 
 
<head> 
<title>Web Survey Results</title> 
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>U.S. IMPACT Studies</o:Author>
  <o:Template>FB289568.dotm</o:Template>
  <o:LastAuthor>isetup</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>13</o:TotalTime>
  <o:LastPrinted>2011-05-27T18:45:00Z</o:LastPrinted>
  <o:Created>2011-06-01T19:33:00Z</o:Created>
  <o:LastSaved>2011-06-01T19:33:00Z</o:LastSaved>
  <o:Pages>27</o:Pages>
  <o:Words>4976</o:Words>
  <o:Characters>28365</o:Characters>
  <o:Company>University of Washington</o:Company>
  <o:Lines>236</o:Lines>
  <o:Paragraphs>66</o:Paragraphs>
  <o:CharactersWithSpaces>33275</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--> 
 
<link rel="stylesheet" type="text/css" href="/drupal-7.7/sites/default/modules/impact_survey/page_example/ReportStyle.css" /> 
 
<!-- Charting JS -->
<script type="text/javascript" src="/drupal-7.7/sites/default/modules/impact_survey/page_example/highcharts/js/jquery-1.6.js"></script> 
<script type="text/javascript" src="/drupal-7.7/sites/default/modules/impact_survey/page_example/highcharts/js/highcharts.src.js"></script> 
<script type="text/javascript" src="/drupal-7.7/sites/default/modules/impact_survey/page_example/highcharts/js/one_chart.js"></script>
<!--/Charting JS -->

<script type="text/javascript""> 
/**
  * This script goes through and looks for <th> tags that contain the word "Figure", and then
  * automatically increments the nmber following figure.
  */
$(document).ready(function() {
	incrementHeaders("chart");
	incrementHeaders("statTable");
});
 
// Accepts a class of table, and attempts to replace # characters with the table number
function incrementHeaders(cssClass) {
	var i = 0;
	// For each table's th child, with a given class
	$("table." + cssClass + " th").each( function() {
		var header = $(this).text();
		header = header.replace("#", ++i);
		$(this).text(header);
	});
}
</script> 
</head> 
 
<body> 
 
<h1>Foreword</h1> 


<p>
Thank you for participating in the IMPACT Survey! We hope you will find the following survey report useful for internal decision-making and planning, and for communicating the value of providing free access to computers and the Internet to policy-makers, funders, and your community.
</p>

<p>
The survey is an extension of the U.S. IMPACT Study. Conducted in 2009, the U.S. IMPACT Study was the first large-scale investigation of the ways library patrons use computers and the Internet at public libraries, why they use it, and how it affects their lives. The study was instrumental in providing evidence that access to the Internet at U.S. public libraries has a profound and measurable impact on individuals and communities. The study findings reported in first report, <i>Opportunity for All: How the American Public Benefits from Internet Access at U.S. Libraries</i>, have helped public libraries throughout the United States improve public access services and advocate for better support of public access computing. The study's second report, <i>Opportunity for All: How Library Policies and Practices Impact Public Internet Access</i>, was released in June of 2011.[9
</p>

<p>
This report summarizes how patrons use the public access technology provided by [s:lib_name] based on IMPACT Survey responses. The report is divided into four sections: 
</p>

<ul>
	<li>
	The library profile contextualizes the survey results by providing information about the public access computing resources managed by the library. Research has found that these inputs affect patron outcomes. The overall results section summarizes how and how often patrons access the public access technology resources and services provided by [s:lib_name].
	</li>
	<li>
	The section on public access technology by activity area reports on patron use across the following domains: education, employment, eBusiness, health and wellness, eGovernment, civic engagement, eCommerce, and social inclusion.
	</li>
	<li>
	Finally, the patron satisfaction and demographics section provides details on the types of patrons that completed the survey and how satisfied they are with the technology services provided by the library. 
	</li>
</ul>
The survey results provide an overview of how providing public access technology services at the library benefits your community.  To help your library effectively use these results in your advocacy efforts, we invite you to visit  the IMPACT Survey website to access a number of additional advocacy tools (http://impactsurvey.org/advocacy). 

 
<p>Sincerely,</p> 
<p>Michael Crandall, MLIS
<br /> 
Senior Lecturer & Chair, Master of Science in Information Management Program
<br /> 
<a href="mailto:mikecran@uw.edu">mikecran@uw.edu</a></p> 
 
<p>Samantha Becker, MLIS, MPA
<br /> 
Research Manager
<br /> 
<a href="mailto:srbecker@uw.edu">srbecker@uw.edu</a> </p> 
 
<p> 
University of Washington
</p> 
 
<p> 
The Information School<br> 
Box 352840<br> 
Mary Gates Hall, Ste 370<br> 
Seattle, WA 98195-2840<br> 
<strong>Phone: </strong>(206)
685-9937
<br /> 
<strong>Fax:</strong> (206) 616-3152
</p> 
 
<p> 
<a href="http://impactsurvey.org">http://impactsurvey.org</a> 
</p> 
 
<!-- Intake form vars - retrieved from Drupal tokens -->
<style type="text/css">
	.intake tr:first-child td {
		border-bottom: none;
	}
</style>
<h2>Library Details</h2>
<table class="intake">
	<tr>
		<td>Number of residents within legal service area:</td>
		<td>[current-user:profile-imls-data:field-legalpop]</td>
	</tr>
	<tr>
		<td>Number of patron visits during past year:</td>
		<td>[current-user:profile-imls-data:field-visits]	</td>
	</tr>
	<tr>
		<td>Number of hours the library system was open during the past year:</td>
		<td>[current-user:profile-imls-data:field-hours]</td>
	</tr>
	<tr>
		<td>Total operational expenditures during past year:</td>
		<td>[current-user:profile-imls-data:field-expend-tot]</td>
	</tr>
	<tr>
		<td>Total number of full-time equivalent paid staff:</td>
		<td>[current-user:profile-imls-data:field-fte]</td>
	</tr>
	<tr>
		<td>Total number of public access Internet terminals within the library system:</td>
		<td>[current-user:profile-imls-data:field-terminals]</td>
	</tr>
	<tr>
		<td>Number of public access Internet terminal uses during past year:</td>
		<td>[current-user:profile-imls-data:field-pac-uses]</td>
	</tr>
</table>

<h2>Resources and Infrastructure</h2>
<script>
 $(document).ready(function() {
 	// Iterate through the resources table, if the second td is zero, remove it.
 	$(".intake td").each(function() {
 		if ($(this).text() == "0") {
 			$(this).parent().remove();
 		}
 	});
 	
 });
</script>
<table class="intake">
	<tr>
		<td>Source of IT support: [list all checked]</td>
		<td></td>
	</tr>
	<tr>
		<td>Source of library Internet connection:</td>
		<td>[current-user:profile-intake-form:field-internet-source]</td>
	</tr>
	<tr>
		<td>Maximum download speed of library Internet connection: </td>
		<td>[current-user:profile-intake-form:field-bandwidth-mngt]</td>
	</tr>
	<tr>
		<td>Library provides wireless Internet access</td>
		<td>01</td>
	</tr>
	<tr>
		<td>Library provides the following assistive technologies for people with physical impairments/disabilities:</td>
		<td>0</td>
	</tr>
	<tr>
		<td>Library uses session management software</td>
		<td>0</td>
	</tr>
</table>

<h2>Training</h2>
<table class="intake">
	<tr>
		<td>Library provides staff with access to learning resources and opportunities relevant to public access technology during working hours</td>
		<td></td>
	</tr>
	<tr>
		<td>Library provides public access technology training to volunteers</td>
		<td></td>
	</tr>
	<tr>
		<td>Library offers appointments for one-on-one technology training/help</td>
		<td></td>
	</tr>
	<tr>
		<td>Library offers classes about online safety</td>
		<td></td>
	</tr>
</table>

<h2>Policies</h2>
<table class="intake">
	<tr>
		<td>Library includes public access technology in its strategic plan [If 0, do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Library engages community partners in delivering public access technology services [If 0, do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Library tracks expenses related to public access technology service provision [If 0, do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Library has a public access technology hardware replacement plan [If 0, do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Standard maximum daily time limit for patrons using public access Internet terminals:  ________ minutes</td>
		<td></td>
	</tr>
	<tr>
		<td>Librarians are permitted to extend the session time for patrons [if 0, do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Library has dedicated public access Internet terminals for the following uses: [List all, if response = 6 do not display]</td>
		<td></td>
	</tr>
	<tr>
		<td>Library staff are permitted to extend the session time for patrons [if 0, do not display]</td>
		<td></td>
	</tr>
</table>
<!-- Actual report begins here --> 
 
 
<a class="pagebreak"></a> 
<h1 class="finished">Overall results </h1> 
 
<p> 
[s:lib_name] ran the IMPACT Survey for <b>[s:duration]</b> days; a total of <b>[s:Z_method_n]</b> people responded. 
Figure 1 shows the concentration of responses by ZIP code as reported by survey respondents. 
</p> 
 
 
<!-- Map markup --> 
<table class="figure" style="border-bottom: none"> 
    <th> 
        Figure 1: ZIP codes of web survey respondents
    </th> 
    <tr style="background: url(http://www.konspence.com/maps/maps/[s:fscs].png)"> 
        <td> 
            <div style="width:100%; height:595px"> 
                <style type="text/css"> 
                   #[s:fscs]-legend {
                        background-color: white;
                        /*width: 100px;*/
                   }
                   #[s:fscs]-legend tr td {
                        text-align: center;
                   }
                </style> 
                <div style="float:right; margin-top:420px" id="legend">  
                     <script type="text/javascript"> 
                        $(document).ready(function() {
                        	 // Legends are outputted with maps - they should eventually be in the same directory
                        	 // (TODO: turn the legends into JSON)
                             $("#legend").load('../legends/[s:fscs].html', function() {
                                    $("#legend table tr:first").before("<th colspan='2'>Responses <br> by zip</th>");
                                    
      								var tdSet = $("#legend td");
      								var legendArray = new Array();
      								var elementArray = new Array();
      								tdSet.each(function() {
      									if($(this).text() > 1) {
      										legendArray.push(parseInt($(this).text()));
      										elementArray.push(this);
      									}
      								});
      								$.each(elementArray, function(i, element) {
      									if( i > elementArray.length - 2 ) {
      										$(element).text(legendArray[i] + "+");
      									} else {
      										$(element).text(legendArray[i] + " - " + legendArray[i + 1]);
      									}
      								});
                             });
 
                             console.log($("#legend table tr td:first").text());
                        });
                     </script> 
                </div> 
            </div> 
        </td> 
    </tr> 
</table> 
<!-- /Map Markup --> 
 
<h2 class="finished">Library use</h2> 
 
<p>[s:GEN_visit_p]% ([s:GEN_visit_n]) of survey respondents visited the library over the past 12
months. Of those who did,</p> 
 
<ul> 
  <li> 
  <b>[s:GEN_visit_weekly_n]
  ([s:GEN_visit_weekly_p]%)</b> visited the library once a week or more
  frequently;
  </li> 
  
  <li> 
  <b>[s:GEN_visit_13_month_n]
  ([s:GEN_visit_13_month_p]%) </b>visited the library about 1-3 times a month;
  </li> 
  
  <li> 
  <b>[s:GEN_visit_less_than_month_n]
  ([s:GEN_visit_less_than_month_p]%) </b>visited the library less than once a
  month.
  </li> 
</ul> 
 
<h3>Accessing library resources through the library website</h3> 
 
<p>
<b>[s:GEN_comp_users_p]% ([s:GEN_comp_users_n])</b> of respondents <b>used the <i>library's 
computers</i> to access library resources</b> such as the online catalog, placing holds or 
renewing library materials, downloading eBooks or Audiobooks, or to access the 
library's subscription databases (See Figure 2). 
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Library resources accessed using a library computer</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig2",
  			type = "bar",
  			title = "Library resources accessed using a library computer",
  			data = [
				[s:GEN_comp_type_cat_p], 
				[s:GEN_comp_type_acc_p], 
				[s:GEN_comp_type_ebook_p], 
				[s:GEN_comp_type_sub_p]
			],
			labels = [
				"Online catalog",
				"Placing holds or renewing library materials",
				"Download eBooks or audiobooks",
				"Access library's subscription databases"
			],
			xTitle = "Percent of patrons"
		);
	   </script> 
      <div id="fig2" style="height:300px"></div> 
    </td> 
  </tr> 
</table> 
 
<p>Of those who reported using library computers for these
purposes in the past 12 months,</p> 
 
<ul> 
  <li> 
  <b>[s:GEN_comp_weekly_n]
  ([s:GEN_comp_weekly_p]%) </b>did so once a week or more frequently;
  </li> 
  
  <li> 
  <b>[s:GEN_comp_13_month_n]
  ([s:GEN_comp_13_month_p]%) </b>did so about 1-3 times a month;
  </li> 
  
  <li> 
  <b>[s:GEN_comp_less_than_month_n]
  ([s:GEN_comp_less_than_month_p]%) </b>did so less than once a month.
  </li> 
</ul> 
 
<h3 class="finished">Remote visits to library website</h3>

<p>
<b>[s:GEN_remote_users_p]% ([s:GEN_remote_users_n]) of respondents accessed library 
resources through the library's website <i>from outside the library</i></b> (e.g. from home, school, 
or work). Of those who accessed library resources remotely,
</p> 
 
<ul> 
  <li> 
  <b>[s:GEN_remote_weekly_n]
  ([s:GEN_remote_weekly_p]%) </b>did so once a week or more frequently;
  </li> 
  
  <li> 
  <b>[s:GEN_remote_13_month_n]
  ([s:GEN_remote_13_month_p]%) </b>did so about 1-3 times a month;
  </li> 
  
  <li> 
  <b>[s:GEN_remote_less_than_month_n]
  ([s:GEN_remote_less_than_month_p]%) </b>did so less than once a month.
  </li> 
</ul> 
 
<p>
In addition, [s:GEN_handheld_p]% ([s:GEN_handheld_n]) of respondents accessed 
library resources through a handheld mobile device such as a cellphone, 
Blackberry, or iPhone.
</p>
 
<h3 class="finished">Use of public access computers or wireless network</h3> 
 
<p> 
Of the respondents, <b>[s:GEN_internet_users_p]% ([s:GEN_internet_users_n])  
used a library computer to access the Internet during the past 12 months,</b> 
with frequencies as follows: 
</p> 
 
<ul> 
  <li> 
  <b>[s:GEN_internet_weekly_n]
  ([s:GEN_internet_weekly_p]%) </b>did so once a week or more frequently;
  </li> 
  
  <li> 
  <b>[s:GEN_internet_13_month_n]
  ([s:GEN_internet_13_month_p]%) </b>did so about 1-3 times a month;
  </li> 
  
  <li> 
  <b>[s:GEN_internet_less_than_month_n]
  ([s:GEN_internet_less_than_month_p]%) </b>did so less than once a month.
  </li> 
</ul> 
 
<p>
<b>[s:GEN_wireless_users_p]% ([s:GEN_wireless_users_n])  accessed the library's wireless network connection 
using their own computer.</b> Of these respondents,
</p> 
 
<ul> 
  <li> 
  <b>[s:GEN_wireless_weekly_n] ([s:GEN_wireless_weekly_p]%) </b>used the library's wireless network once a
  week or more frequently;
  </li> 
  
  <li> 
  <b>[s:GEN_wireless_13_month_n] ([s:GEN_wireless_13_month_p]%) </b>used the library's wireless network about
  1-3 times a month;
  </li> 
  
  <li> 
  <b>[s:GEN_wireless_less_than_month_n] ([s:GEN_wireless_less_than_month_p]%) </b>used the
  library's wireless network less than once a month.
  </li> 
</ul> 

<p>
<b>Overall, [s:USE_pac_p]% of survey respondents had used a public access computer 
or the library's wireless network connection to access the Internet in the past 
12 months.</b> Using either means of access qualified respondents as <i>public 
access technology <u>users.</u></i> <b>[s:GEN_access1_p]%  of these users had regular 
access to a computer and the Internet somewhere other than the library.</b>
</p>

<p>
Many people with alternative means of access rely on the library for access to computers and the Internet while travelling. 
Of the users surveyed, <b>[s:USE_travel_yes_p]% ([s:USE_travel_yes_n]) 
reported they had used a library computer or wireless Internet connection while out-of-town during 
the past 12 months.</b>
</p>

<p>
In addition to use while traveling, the U.S. IMPACT Study found several other important 
reasons driving respondents with alternative means of access to use technology 
resources at the public library: 
</p>
 
<ul> 
  <li> 
    <b>Lack of access to high speed Internet at home. </b>The library Internet connection is
  used to download large files or access websites that require a high speed
  connection.
  </li> 
  
  <li> 
  <b>During gaps in access</b>, such as when moving to a new location or during power
  outages, or when a primary computer is broken or lacking in necessary software.
  </li> 
  
  <li> 
  <b>Household competition.</b> Especially among youth, competition with siblings or parents
  over a single household computer was a significant reason for using the
  library's computers when one was available at home. 
  </li> 
  
  <li> 
  <b>For a change in scenery.</b> People who work at home sometimes use library computers and
  wireless Internet network to get out of the house. Job seekers also reported
  using computers in the library to maintain a normal schedule and stay connected
  to the community. 
  </li> 
  
  <li> 
  <b>During lunch breaks or while out running errands. </b>Many users reported that they
  stop in to use the library's computers to check email, look up phone numbers or
  driving directions, or other quick tasks. 
  </li> 
  
  <li> 
  <b>As a supplement to the library catalog</b> for such activities as
  looking up book reviews, reading lists,
  and other aids for selecting materials.
  </li> 
</ul> 
 
 
<h1 class="finished">Overall uses of public access technology</h1> 
<p> 
Public access technology users at [s:lib_name] reported accessing a 
variety web-based resources and network tools. Figure 3 describes the 
types of tools accessed over the past 12 months. 
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Tools accessed by patrons using the library's computers or Internet connection</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig3",
  			type = "bar",
  			title = "Ways patrons have used the library's computers or Internet connection",
  			data = [
  				[s:USE_tools_print_p], 
  				[s:USE_tools_email_p], 
  				[s:USE_tools_search_p], 
  				[s:USE_tools_mess_p], 
  				[s:USE_tools_call_p], 
  				[s:USE_tools_blog_p], 
  				[s:USE_tools_wiki_p], 
  				[s:USE_tools_soc_p], 
  				[s:USE_tools_vid_p],
			    [s:USE_tools_aud_p]
			],
			labels = [
				"Your library's printers",
				"Email",
				"Search engines",
				"Instant messaging/chat",
				"Phone call or video chat",
				"Blogs",
				"Wikis",
				"Social networking",
				"Streaming video",
				"Streaming audio" 
			],
			xTitle = "Percent of patrons"
		);
	  </script> 
      <div id="fig3" style="height:550px"></div> 
    </td> 
  </tr> 
</table> 
 
<br /> 
 
<h3 class="finished">Help and training</h3> 
 
<p>
The U.S. IMPACT Study showed that a major draw to public access technology 
in libraries is the help and training available there. At [s:lib_name], <b>[s:USE_help_helped_p]% 
of users reported having received one-on-one technology help from library staff or volunteers 
over the past 12 months.</b> Figure 4 shows the types of help these users received 
from library staff or volunteers. 
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Type of help received from library staff or volunteers</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig4",
  			type = "bar",
  			title = "Type of help received from library staff or volunteers",
  			data = [
  				[s:USE_help_libserv_p], 
  				[s:USE_help_subscrip_p], 
  				[s:USE_help_basic_p], 						
  				[s:USE_help_websearch_p], 
  				[s:USE_help_nonlibsite_p], 
  				[s:USE_help_software_p]
			],
			labels = [
				"Library Computer Services",
				"Subscription Databases and Websites",
				"Basic computer instruction",
				"Searching on the Internet",
				"Non-library websites",
				"Creating or editing documents"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="fig4"></div> 
    </td> 
  </tr> 
</table> 
 
<p>
Additionally, <b>[s:USE_train_yes_p]% ([s:USE_train_yes_n]) of users attended 
computer-related training or classes at the library during the past 12 months.</b> 
Note that this question was not asked of nonusers; <b>[s:lib_name]</b> may have patrons 
who take computer-related training classes but otherwise do not use the 
library's computers or Internet connection.
</p> 
 
<h3 class="finished">Using the library's computers on behalf of others</h3> 
 
<p>
The beneficiaries of library Internet access often extend beyond the individual users; 
at [s:lib_name], <b>[s:USE_limb_p]% ([s:USE_limb_n]) of users found information or 
performed tasks for family or friends using the library's computers or Internet connection.</b>
</p> 
 
<h1 class="finished">Public access technology uses by activity area</h1> 
 
<p>
Technology in public libraries is important for helping people satisfy their needs 
to access information and perform tasks. Users were asked about how they used public 
library computers and wireless networks  in relation activities associated with 
education, employment, eBusiness, health and wellness, eGovernment, civic engagement, 
eCommerce, and social inclusion. Figure 5 shows the overall use of public access 
technology in those areas; the following sections further detail their activities. 
</p> 
 
<div class="pagebreak"></div> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
      		renderChart(
      			divId = "fig5",
      			type = "bar",
      			title = "Public computer use by area for self and others",
      			data = [
					[s:EDU_edu_p],
					[s:EMP_emp_p],
					[s:BUS_bus_p],
					[s:HEA_hea_p],
					[s:GOV_gov_p],
					[s:CIV_civ_p],
					[s:COM_com_p],
					[s:SOC_soc_p]
   				],
   				labels = [
					"Education",
					"Employment",
					"eBusiness",
					"Health",
					"eGovernment",
					"Civic engagement",
					"eCommerce",
					"Social inclusion"
				],
				xTitle = "Percent of patrons"
			);
		</script> 
      <div id="fig5"></div> 
    </td> 
  </tr> 
</table> 
 
 <h2><img src="template-revision1_files/education.jpg.png" /> Education</h2> 
 
<p>
At [s:lib_name], [s:EDU_edu_p]% of users indicated they had used the 
public library's computers or wireless network for educational purposes. 
The majority of users who engaged in this activity, [s:EDU_edu_highest_p]%, 
were between the ages of [insert  highest use age group] (Figure 6). <!-- TODO -->
</p> 
 
<p>
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
      		renderChart(
      			divId = "age1",
      			type = "bar",
      			title = "Age of patrons who use educational resources",
      			data = [
					[s:EDU_edu_14_24_p],
					[s:EDU_edu_25_34_p],
					[s:EDU_edu_35_44_p],
					[s:EDU_edu_45_54_p],
					[s:EDU_edu_55_64_p],
					[s:EDU_edu_65_p],
   				],
   				labels = [
					"14 - 24",
					"25 - 34",
					"35 - 44",
					"45 - 54",
					"55 - 64",
					"65+"
				],
				xTitle = "Percent of patrons"
			);
		</script> 
      <div id="age1"></div> 
    </td> 
  </tr> 
</table> 


</p> 

<p>
Table 1 details the education tasks patrons reported engaging in during 
the past 12 months. The most commonly reported task[(s) conditional for tie] 
performed by users at [s:lib_name] was [s:EDU_task_highest].   <!-- TODO -->
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: Education activities
  </th> 
 </tr> 
 <tr> 
  <td> 
  <p></p> 
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about a
  degree or certificate program</p> 
  </td> 
  <td> 
  <p>[s:EDU_program_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_program_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Apply for a
  degree or certificate program</p> 
  </td> 
  <td> 
  <p>[s:EDU_apply_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_apply_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Admitted to the program</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_apply_admit_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_apply_admit_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Take
  an online class or workshop</p> 
  </td> 
  <td> 
  <p>[s:EDU_class_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_class_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Do
  research for a class</p> 
  </td> 
  <td> 
  <p>[s:EDU_research_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_research_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Complete course work or homework</p> 
  </td> 
  <td> 
  <p>[s:EDU_crswork_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_crswork_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Prepare for a standardized test</p> 
  </td> 
  <td> 
  <p>[s:EDU_testprep_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_testprep_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Take any school-related test online</p> 
  </td> 
  <td> 
  <p>[s:EDU_test_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_test_n]</p> 
  </td> 
 </tr> 
 <tr> 
 
  <td> 
  <p><b>Librarian served as proctor</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_test_proc_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_test_proc_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Apply
  for financial Aid</p> 
  </td> 
  <td> 
  <p>[s:EDU_finaid_p]%</p> 
  </td> 
  <td> 
  <p>[s:EDU_finaid_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Received financial aid</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_finaid_get_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EDU_finaid_get_n]</b></p> 
  </td> 
 </tr> 
</table> 
 
<p>*Bolded rows indicate activities that show outcomes of other activities, i.e. users actually
followed through on their earlier information seeking to accomplish a task.</p> 
 
 
<h2 class="finished"> 
<img src="template-revision1_files/employment.jpg.png" /> Employment 
</h2> 
 
<p>
The public library plays a vital role in workforce development, providing job seekers with access to online job postings and assistance with online applications, cover letters, and resumes. [s:EMP_emp_p]% of the public access technology  users at [s:lib_name] reported they had used these resources for employment or career purposes in the past 12 months. The majority of users who engaged in this activity, [insert highest age group percentage]%, were between the ages of [insert  highest use age group] (Figure 7). <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age3",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:EMP_emp_14_24_p],
				[s:EMP_emp_25_34_p],
				[s:EMP_emp_35_44_p],
				[s:EMP_emp_45_54_p],
				[s:EMP_emp_55_64_p],
				[s:EMP_emp_65_p],
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age3"></div> 
    </td> 
  </tr> 
</table> 
 
<p> 
Table 2 details the employment tasks which users performed over the past 12 months. 
Of the [s:EMP_oppr_p] who used the library's technology resources to search for a job 
opportunity, [s:EMP_oppr_intrvw_oppr_p]% were granted an interview and 
[s:EMP_oppr_hired_oppr_p]% were hired for a new position.  <!-- TODO -->
</p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: Employment activities
  </th> 
 </tr> 
 <tr> 
  <td> 
  <p></p> 
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Look for job</p> 
  </td> 
  <td> 
  <p>[s:EMP_oppr_p]%</p> 
  </td> 
  <td> 
  <p>[s:EMP_oppr_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Applied for job/sent out resume</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_jobapp_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_jobapp_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Got interview</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_intrvw_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_intrvw_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Got job</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_hired_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:EMP_oppr_hired_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Work on resume</p> 
  </td> 
  <td> 
  <p>[s:EMP_resume_p]%</p> 
  </td> 
  <td> 
  <p>[s:EMP_resume_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Receive skill-based training</p> 
  </td> 
  <td> 
  <p>[s:EMP_train_p]%</p> 
  </td> 
  <td> 
  <p>[s:EMP_train_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Research/find info related to job/profession</p> 
  </td> 
  <td> 
  <p>[s:EMP_research_p]%</p> 
  </td> 
  <td> 
  <p>[s:EMP_research_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Do work for current job</p> 
  </td> 
  <td> 
  <p>[s:EMP_work_p]%</p> 
  </td> 
  <td> 
  <p>[s:EMP_work_n]</p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/ebusiness.png.png" /> eBusiness
</h2> 
 
<p> 
By providing public access technology services, the library is contributing to the economic health of the community by helping users start and manage their own businesses. [s:BUS_bus_p]% of the public access technology users at [s:lib_name] reported they had used these resources for these eBusiness purposes in the past 12 months. The majority of users who engaged in this activity, [insert highest age group percentage]%, were between the ages of [insert  highest use age group] <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age4",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:BUS_bus_14_24_p],
				[s:BUS_bus_25_34_p],
				[s:BUS_bus_35_44_p],
				[s:BUS_bus_45_54_p],
				[s:BUS_bus_55_64_p],
				[s:BUS_bus_65_p]
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age4"></div> 
    </td> 
  </tr> 
</table> 
 
<p> 
Of those respondents who used the library's technology resources to manage a current business, [s:BUS_cust_bus_p]% found  potential customers, and as a result [s:BUS_cust_incrs_cust_p]% saw business increase. Table 3 details the eBusiness tasks patrons reported engaging in during the past 12 months.
</p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
  <tr> 
    <th colspan="3"> 
      Table #: eBusiness activities
    </th> 
  </tr> 
  <tr> 
    <td> 
    </td> 
    <td> 
      % of users 
    </td> 
    <td> 
      n
    </td> 
  </tr> 
 <tr> 
  <td> 
  <p>Started own business</p> 
  </td> 
  <td> 
  <p>[s:BUS_start_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_start_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Manage an existing business</p> 
  </td> 
  <td> 
  <p>[s:BUS_manage_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_manage_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Wrote business plan </p> 
  </td> 
  <td> 
  <p>[s:BUS_busplan_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_busplan_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Perform business-related research</p> 
  </td> 
  <td> 
  <p>[s:BUS_research_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_research_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Apply for business license/permit</p> 
  </td> 
  <td> 
  <p>[s:BUS_license_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_license_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find potential customers</p> 
  </td> 
  <td> 
  <p>[s:BUS_cust_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_cust_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Business increased</b></p> 
  </td> 
  <td> 
  <p><b>[s:BUS_cust_incrs_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:BUS_cust_incrs_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find business-to-business contract opportunities</p> 
  </td> 
  <td> 
  <p>[s:BUS_contract_p]%</p> 
  </td> 
  <td> 
  <p>[s:BUS_contract_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Received business-to-business
  contract</b></p> 
  </td> 
  <td> 
  <p><b>[s:BUS_contract_recvd_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:BUS_contract_recvd_n]</b></p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/health_and_wellness.jpg.png" /> Health and Wellness
</h2> 
 
<p>
Increasingly, finding health information and conducting many health-related service transactions means going online. 
[s:HEA_hea_p]% of users at [s:lib_name] indicated they had used they library's computers or Internet connection 
for heath or wellness purposes. The majority of users who engaged in this activity, [insert highest age group percentage]%, 
were between the ages of [insert  highest use age group] (Figure 8). <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age5",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:HEA_hea_14_24_p],
				[s:HEA_hea_25_34_p],
				[s:HEA_hea_35_44_p],
				[s:HEA_hea_45_54_p],
				[s:HEA_hea_55_64_p],
				[s:HEA_hea_65_p]
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age5"></div> 
    </td> 
  </tr> 
</table> 
 
<p>
In the U.S. IMPACT Study, health and wellness resulted in significant outcomes for users. 
At [s:lib_name], of the [s:HEA_diet_p]% of users who reported learning about diet or nutrition, 
[s:HEA_diet_change_diet_p]% of those users made a change to their diet; of the [s:HEA_exercs_p]% 
of users who reported learning about exercise or fitness, [s:HEA_exercs_change_exercs_p]% made a 
change in their exercise habits.  Table 4 details the health and wellness tasks patrons reported 
engaging in during the past 12 months.
</p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: Health and wellness activities
  </th> 
 </tr> 
 <tr> 
  <td>
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about illness, disease, or medical condition</p> 
  </td> 
  <td> 
  <p>[s:HEA_illness_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_illness_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about medical procedure</p> 
  </td> 
  <td> 
  <p>[s:HEA_medpro_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_medpro_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find online/in-person support groups for health need</p> 
  </td> 
  <td> 
  <p>[s:HEA_supgrp_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_supgrp_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about prescription/OTC drugs</p> 
  </td> 
  <td> 
  <p>[s:HEA_prescr_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_prescr_p]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find out about diet/nutrition</p> 
  </td> 
  <td> 
  <p>[s:HEA_diet_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_diet_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Made diet changes</b></p> 
  </td> 
  <td> 
  <p><b>[s:HEA_diet_change_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:HEA_diet_change_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about exercise/fitness</p> 
  </td> 
  <td> 
  <p>[s:HEA_exercs_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_exercs_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Made changes in exercise habits </b></p> 
  </td> 
  <td> 
  <p><b>[s:HEA_exercs_change_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:HEA_exercs_change_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find info about doctor/health care provider</p> 
  </td> 
  <td> 
  <p>[s:HEA_doctor_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_doctor_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Buy insurance/enroll in
  drug discount program</p> 
  </td> 
  <td> 
  <p>[s:HEA_hlthins_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_hlthins_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Access Medical Records</p> 
  </td> 
  <td> 
  <p>[s:HEA_records_p]%</p> 
  </td> 
  <td> 
  <p>[s:HEA_records_n]</p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/egovernment.jpg.png" /> eGovernment
</h2> 
 
<p>
Libraries play a significant role in connecting citizens with essential 
eGovernment services. [s:GOV_gov_p]% of users at [s:lib_name] used the library's 
computers and Internet connection for eGovernment purposes. The majority of users 
who engaged in this activity, [insert highest age group percentage]%, were between 
the ages of [insert  highest use age group] (Figure 9). <!-- TODO -->
</p> 
<table class="chart"> 
  <tr> 
    <th> 
        Figure # - Public computer use by area for self and others
    </th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age2",
  			type = "bar",
  			title = "Age of patrons who use eGovernment resources",
  			data = [
				[s:GOV_gov_14_24_p],
				[s:GOV_gov_25_34_p],
				[s:GOV_gov_35_44_p],
				[s:GOV_gov_45_54_p],
				[s:GOV_gov_55_64_p],
				[s:GOV_gov_65_p]
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age2"></div> 
    </td> 
  </tr> 
</table> 
<p>
Of the users who engaged in eGovernment activities, the most common use[(s) conditional for tie] 
was to [sGOV_task_highest]. Table 5 details the eGovernment tasks patrons reported engaging in during 
the past 12 months.
</p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: eGovernment activities
  </th> 
 </tr> 
 <tr> 
  <td> 
   
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Seek help from government agency</p> 
  </td> 
  <td> 
  <p>[s:GOV_official_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_official_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Get government forms</p> 
  </td> 
  <td> 
  <p>[s:GOV_form_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_form_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Submitted forms online</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_form_submit_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_form_submit_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about laws/regulations</p> 
  </td> 
  <td> 
  <p>[s:GOV_law_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_law_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about permits/licenses</p> 
  </td> 
  <td> 
  <p>[s:GOV_permit_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_permit_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Applied for permit/license</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_permit_apply_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_permit_apply_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Seek legal assistance/advice</p> 
  </td> 
  <td> 
  <p>[s:GOV_legal_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_legal_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about government programs/services</p> 
  </td> 
  <td> 
  <p>[s:GOV_program_p]%</p> 
  </td> 
  <td> 
  <p>[s:GOV_program_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Applied for government programs/services</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_program_apply_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:GOV_program_apply_n]</b></p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/civic_engagement.jpg.png" /> Civic engagement
</h2> 
 
<p>
Public libraries support civic engagement by providing a venue and resources for 
citizens to engage with their community. [s:CIV_civ_p]% of public access technology 
users surveyed at [s:lib_name] reported using the library's computers or Internet 
connection for civic engagement purposes. The majority of users who engaged in this 
activity, [insert highest age group percentage]%, were between the ages of 
[insert  highest use age group] (Figure 10). <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age6",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:CIV_civ_14_24_p],
				[s:CIV_civ_25_34_p],
				[s:CIV_civ_35_44_p],
				[s:CIV_civ_45_54_p],
				[s:CIV_civ_55_64_p],
				[s:CIV_civ_65_p],
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age6"></div> 
    </td> 
  </tr> 
</table> 
 
<p>Table 6 details the civic engagement activities patrons reported 
engaging in during the past 12 months. Of the users who engaged in 
civic engagement activities, the most common use[(s) conditional for tie] 
was to [s:CIV_task_highest]. <!-- TODO --></p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: Civic engagement activities
  </th> 
 </tr> 
 <tr> 
  <td> 
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Keep up with news/current events</p> 
  </td> 
  <td> 
  <p>[s:CIV_news_p]%</p> 
  </td> 
  <td> 
  <p>[s:CIV_news_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about political activity/candidate or social cause</p> 
  </td> 
  <td> 
  <p>[s:CIV_politics_p]%</p> 
  </td> 
  <td> 
  <p>[s:CIV_politics_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p><b>Got involved with political activity, candidate, or cause</b></p> 
  </td> 
  <td> 
  <p><b>[s:CIV_politics_help_p]%</b></p> 
  </td> 
  <td> 
  <p><b>[s:CIV_politics_help_n]</b></p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Start a new civic or community group</p> 
  </td> 
  <td> 
  <p>[s:CIV_club_p]%</p> 
  </td> 
  <td> 
  <p>[s:CIV_club_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Participate in a civic or community group</p> 
  </td> 
  <td> 
  <p>[s:CIV_particip_p]%</p> 
  </td> 
  <td> 
  <p>[s:CIV_particip_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Organize/manage club, civic/community/church group, or non-profit</p> 
  </td> 
  <td> 
  <p>[s:CIV_org_p]%</p> 
  </td> 
  <td> 
  <p>[s:CIV_org_n]</p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/ecommerce.jpg.png" /> eCommerce
</h2> 
 
<p> 
The library provides patrons with the means to engage in a wide variety 
of eCommerce activities. Consumers connected to the Internet are able to 
find and compare products and services, leaving those without access at a 
disadvantage when it comes to making informed financial decisions. 
[s:COM_com_p]% of patrons at [s:lib_name] indicated they had used a 
public library computer or Internet connection for eCommerce purposes. 
The majority of users who engaged in this activity, [insert highest age group percentage]%, 
were between the ages of [insert  highest use age group] (Figure 11). <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age7",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:COM_com_14_24_p],
				[s:COM_com_25_34_p],
				[s:COM_com_35_44_p],
				[s:COM_com_45_54_p],
				[s:COM_com_55_64_p],
				[s:COM_com_65_p],
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age7"></div> 
    </td> 
  </tr> 
</table> 
 
<p> 
Of eCommerce users, <b>the most common use[(s) conditional for tie] was to 
[s:COM_task_highest].</b> Table 7 details the eCommerce tasks patrons reported 
engaging in during the past 12 months.
</p> 
 
<div class="pagebreak"></div> 
 
<table class="statTable"> 
 <tr> 
  <th colspan="3"> 
  Table #: eCommerce activities
  </th> 
 </tr> 
 <tr> 
  <td> 
  </td> 
  <td> 
  <p>% of users</p> 
  </td> 
  <td> 
  <p>n</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Find housing</p> 
  </td> 
  <td> 
  <p>[s:COM_housing_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_housing_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Bank online</p> 
  </td> 
  <td> 
  <p>[s:COM_bank_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_bank_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Pay bills</p> 
  </td> 
  <td> 
  <p>[s:COM_paybills_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_paybills_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Get investment info</p> 
  </td> 
  <td> 
  <p>[s:COM_invest_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_invest_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Research products/services</p> 
  </td> 
  <td> 
  <p>[s:COM_compare_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_compare_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Purchase online</p> 
  </td> 
  <td> 
  <p>[s:COM_purchase_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_purchase_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Sell online</p> 
  </td> 
  <td> 
  <p>[s:COM_sell_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_sell_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Make travel arrangements</p> 
  </td> 
  <td> 
  <p>[s:COM_travel_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_travel_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Look up credit rating</p> 
  </td> 
  <td> 
  <p>[s:COM_credit_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_credit_n]</p> 
  </td> 
 </tr> 
 <tr> 
  <td> 
  <p>Learn about getting out of debt</p> 
  </td> 
  <td> 
  <p>[s:COM_debt_p]%</p> 
  </td> 
  <td> 
  <p>[s:COM_debt_n]</p> 
  </td> 
 </tr> 
</table> 
 
<br /> 
 
<h2 class="finished"> 
<img src="template-revision1_files/social_inclusion.jpg.png" /> Social inclusion
</h2> 
 
<p>
Patrons use public access technology to stay in touch with family and friends, 
and to build and maintain social networks. [s:SOC_soc_p]% of users reported having 
used the library's computers or Internet connection for social inclusion purposes. 
The majority of users who engaged in this activity, [insert highest age group percentage]%, 
were between the ages of [insert  highest use age group] (Figure 12). <!-- TODO -->
</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Public computer use by area for self and others</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "age8",
  			type = "bar",
  			title = "Age of patrons who use employment resources",
  			data = [
				[s:SOC_soc_14_24_p],
				[s:SOC_soc_25_34_p],
				[s:SOC_soc_35_44_p],
				[s:SOC_soc_45_54_p],
				[s:SOC_soc_55_64_p],
				[s:SOC_soc_65_p],
			],
			labels = [
				"14 - 24",
				"25 - 34",
				"35 - 44",
				"45 - 54",
				"55 - 64",
				"65+"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="age8"></div> 
    </td> 
  </tr> 
</table> 
 
<p>
<b>The most common social inclusion use[(s) conditional for tie] of public library 
technology was to [s:COM_task_highest].</b> Table 8 shows the types of social inclusion 
activities patrons reported engaging in during the past 12 months. <!-- TODO -->
</p> 
 
<div class="pagebreak"></div> 
 
<p> 
<table class="chart"> 
  <tr> 
    <th>Figure # - Social inclusion activities</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig6",
  			type = "bar",
  			title = "Social inclusion activities",
  			data = [
				[s:SOC_site_friends_p],
				[s:SOC_site_skill_p],
				[s:SOC_site_hobby_p],
				[s:SOC_site_gene_p],
				[s:SOC_site_diy_p],
				[s:SOC_site_recipes_p],
				[s:SOC_site_event_p],
				[s:SOC_site_support_p],
				[s:SOC_site_parent_p],
				[s:SOC_site_pet_p],
				[s:SOC_site_celeb_p],
				[s:SOC_site_games_p],
				[s:SOC_site_review_p]
			],
			labels = [
			  "Meet new friends",
			  "Learn new skills",
			  "Pursue a hobby",
			  "Research genealogy",
			  "Get help with a DIY project",
			  "Find recipes",
			  "Organize an event",
			  "Find support for a personal issue",
			  "Find parenting information",
			  "Pet care information",
			  "Follow sports/celebrity news",
			  "Play games",
			  "Find movie, book, or music reviews"
			],
			xTitle = "Percent of patrons"
		  );
		</script> 
      <div id="fig6" style="height:700px"></div> 
    </td> 
  </tr> 
</table> 
</p> 
 
<h1 class="finished">Patron Satisfaction</h1> 
 
<p>
When asked about their level of satisfaction with public access technology at [s:lib_name], 
<b>[s:satisfaction_1_2_p]%</b> of users said that they were either satisfied or very satisfied with the 
access provided at the library (Figure 13).
</p> 
 
<div class="pagebreak"></div> 
 
<p> 
<table class="chart"> 
  <tr> 
    <th>Figure # - Patron satisfaction with PAC resources and services</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig0",
  			type = "pie",
  			title = "Patron Satisfaction",
  			data = [
  				[s:satisfaction01_p],
  				[s:satisfaction02_p],
  				[s:satisfaction03_p],
  				[s:satisfaction04_p],
  				[s:satisfaction05_p]
			],
			labels = [
			  	"Very satisfied",
			  	"Satisfied",
			  	"Neither satisfied nor dissatisfied",
			  	"Dissatisfied",
			  	"Very dissatisfied"
			],
			xTitle = "Percent of patrons",
			reverseColors = true
		 );
		</script> 
      <div id="fig0"></div>      
    </td> 
  </tr> 
</table> 
</p> 
 
 
<h1>Importance of computer resources</h1> 
<p>
<u>All survey respondents</u> were asked about the importance of free access to computers 
and the Internet for themselves and their community. [s:import_personal_1_2_p]% 
of respondents reported that public computing resources are important or very important 
to themselves, personally; [s:import_condtext] ([s:import_community_1_2_p]%) felt that 
these resources are important or very important to have available for 
others in the community (Figures 14 and 15).
</p>
<p> 

<table class="chart"> 
  <tr> 
    <th>Figure # - PAC importance (personal)</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig7",
  			type = "pie",
  			title = "PAC importance (personal)",
  			data = [
  				[s:import_personal01_p],
  				[s:import_personal02_p],
  				[s:import_personal03_p],
  				[s:import_personal04_p],
  				[s:import_personal05_p]
			],
			labels = [
			  	"Very important",
			  	"Important",
			  	"Moderately important",
			  	"Of little importance",
			  	"Unimportant"
			],
			xTitle = "Percent of patrons",
			reverseColors = true
		 );
		</script> 
      <div id="fig7"></div> 
    </td> 
  </tr> 
</table> 
<br /> 
<table class="chart"> 
  <tr> 
    <th>Figure # - PAC importance (community)</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig8",
  			type = "pie",
  			title = "PAC importance (community)",
  			data = [
  				[s:import_community01_p],
  				[s:import_community02_p],
  				[s:import_community03_p],
  				[s:import_community04_p],
  				[s:import_community05_p]
			],
			labels = [
			  	"Very important",
			  	"Important",
			  	"Moderately important",
			  	"Of little importance",
			  	"Unimportant"
			],
			xTitle = "Percent of patrons",
			reverseColors = true
		 );
		</script> 
      <div id="fig8"></div> 
    </td> 
  </tr> 
</table> 
</p> 
 
<div class="pagebreak"></div> 
 
<h1 class="finished">Demographic Information</h1> 
 
<p>The following Figures 16-21 provide demographic information about survey respondents from [s:lib_name]</p> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Race</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig9",
  			type = "pie",
  			title = "Patrons by race",
  			data = [
  				[s:Z_race_AI_AN_p],
  				[s:Z_race_asian_p],
  				[s:Z_race_black_p],
  				[s:Z_race_dk_p],
  				[s:Z_race_NH_PI_p],
  				[s:Z_race_cats_multi_p],
  				[s:Z_race_white_p]
			],
			labels = [
			  	"American Indian, Alaska Native",
				"Asian",
				"Black, African American",
				"Don't know or refused",
				"Native Hawaiian, Pac. Islander",
				"Two or more races",
				"White"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
		<div id="fig9"></div> 
    </td> 
  </tr> 
</table> 
 
<br /> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Sex</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig10",
  			type = "pie",
  			title = "Patrons by sex",
  			data = [
  				[s:Z_gender_female_p],
  				[s:Z_gender_male_p]
			],
			labels = [
				"Female",
				"Male"
			],
			xTitle = "Percent of patrons",
			reverseColors = true
		 );
		</script> 
		<div id="fig10"></div> 
    </td> 
  </tr> 
</table> 
 
<br /> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Age</th> 
  </tr> 
  <tr> 
    <td> 
        	<script> 
            renderChart(
            divId = "fig11",
            type = "pie",
            title = "Patrons by age",
            data = [
                [s:Z_year_born_14_24_p],
                [s:Z_year_born_25_34_p],
                [s:Z_year_born_35_44_p],
                [s:Z_year_born_45_54_p],
                [s:Z_year_born_55_64_p],
                [s:Z_year_born_65_p]
            ],
            labels = [
                "14 - 24",
                "25 - 34",
                "35 - 44",
                "45 - 54",
                "55 - 64",
                "65+"
            ],
            xTitle = "Percent of patrons",
            reverseColors = true
           );
	    </script> 
      <div id="fig11"></div> 
    </td> 
  </tr> 
</table> 
<br /> 
<table class="chart"> 
  <tr> 
    <th>Figure # - Education level</th> 
  </tr> 
  <tr> 
    <td> 
      <script> 
  		renderChart(
  			divId = "fig12",
  			type = "pie",
  			title = "Patrons by education level",
  			data = [
  				[s:Z_education_dk_p],
  				[s:Z_education01_p],
  				[s:Z_education02_p],
  				[s:Z_education03_p],
  				[s:Z_education04_p],
  				[s:Z_education05_p],
  				[s:Z_education06_p],
  				[s:Z_education07_p]
			],
			labels = [
				"Don't know or refused",
			  	"Grade school",
				"Some high school",
				"High school or GED",
				"Some college",
				"2 year degree",
				"4 year degree",
				"Post graduate study"
			],
			xTitle = "Percent of patrons"
		 );
		</script> 
      <div id="fig12"></div> 
    </td> 
  </tr> 
</table> 
 
<br /> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Citizenship status</th> 
  </tr> 
  <tr> 
    <td> 
		<script> 
			renderChart(
				divId = "fig13",
				type = "bar",
				title = "Patrons by citizenship status",
				data = [
					[s:Z_nativity_yes_p],
					[s:Z_nativity_apply_p],
					[s:Z_nativity_plan_p],
					[s:Z_nativity_no_p],
					[s:Z_nativity_dk_p]
				],
				labels = [
					"U.S. Citizen",
					"Currently applying for citizenship",
					"Planning on applying for citizenship",
					"Not planning on applying for citizenship",
					"Don't know or refused"
				],
				xTitle = "Percentage of patrons"
			);
		</script> 
      <div id="fig13"></div> 
    </td> 
  </tr> 
</table> 
 
<br /> 
 
<table class="chart"> 
  <tr> 
    <th>Figure # - Income as a percent of household poverty level</th> 
  </tr> 
  <tr> 
    <td> 
	    <script type="text/javascript"> 
            renderChart(
	            divId = "fig14",
	            type = "bar",
	            title = "Income level as percentage of poverty threshold",
	            data = [ 
		            [s:Z_poverty1_p], 
		            [s:Z_poverty2_p], 
		            [s:Z_poverty3_p], 
		            [s:Z_poverty4_p], 
		            [s:Z_poverty_dk_p] 
	            ],
	            labels = [
		            "<100%", 
		            "100-200%", 
		            "200-300%", 
		            ">300%", 
		            "Don't know or refused"
	            ],
	            xTitle = "Percentage of patrons"
            );
	    </script> 
		<div id="fig14"></div> 
    </td> 
  </tr> 
</table> 
 
<h1 class="finished">Conclusion</h1> 
 
<p>
We hope that this report has given you useful information about the 
public access technology users at [s:lib_name] and the contributions 
the library makes to ensuring access to opportunity for all members 
of the community.
</p> 

</body> 
</html> 