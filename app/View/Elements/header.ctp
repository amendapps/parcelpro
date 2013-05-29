



<div id="nav">
    <nav class="menu">
      <ul>
        <li class="drop"><a href="#">Destinations</a>
			<div class="dropbox">
				<ul>
					<li>UK &amp; Ireland
						<div class="parcel-uk">
						<ul>
							<li><a href="">Parcel to England</a></li>
							<li><a href="">Parcel to Ireland</a></li>
							<li><a href="">Parcel to N. Ireland</a></li>
							<li><a href="">Parcel to Scotland</a></li>
							<li><a href="">Parcel to Wales</a></li>
						</ul>
						</div>
					</li>
					<li>Europe
						<div class="parcel-europe">
							<ul>
							<li><a href="">Parcel to Austria</a></li>
							<li><a href="">Parcel to Czech Republic</a></li>
							<li><a href="">Parcel to Denmark</a></li>
							<li><a href="">Parcel to France</a></li>
							<li><a href="">Parcel to Germany</a></li>
							<li><a href="">Parcel to Greece</a></li>
							<li><a href="">Parcel to Holland (Netherlands)</a></li>
							<li><a href="">Parcel to Italy</a></li>
							<li><a href="">Parcel to Portugal</a></li>
							<li><a href="">Parcel to Spain</a></li>
							<li><a href="">Parcel to Sweden</a></li>
							<li><a href="">Parcel to Switzerland</a></li>
							<li><a href=""><em>View all ›</em></a></li>
						</ul>
						</div>
					</li>
					<li>International
						<div class="parcel-europe">						
						<ul>
							<li><a href="sending-parcel-to/Australia">Parcel to Australia</a></li>
							<li><a href="sending-parcel-to/Canada">Parcel to Canada</a></li>
							<li><a href="sending-parcel-to/India">Parcel to India</a></li>
							<li><a href="sending-parcel-to/Japan">Parcel to Japan</a></li>
							<li><a href="sending-parcel-to/Hong-Kong">Parcel to Hong Kong</a></li>
							<li><a href="sending-parcel-to/New-Zealand">Parcel to New Zealand</a></li>
							<li><a href="sending-parcel-to/Pakistan">Parcel to Pakistan</a></li>
							<li><a href="sending-parcel-to/Russia">Parcel to Russia</a></li>
							<li><a href="sending-parcel-to/South-Africa">Parcel to South Africa</a></li>
							<li><a href="sending-parcel-to/Thailand">Parcel to Thailand</a></li>
							<li><a href="sending-parcel-to/Turkey">Parcel to Turkey</a></li>
							<li><a href="sending-parcel-to/USA">Parcel to USA</a></li>
							<li><a href="destinations"><em>View all ›</em></a></li>
						</ul>
					</div>
					</li>
				</ul>
					<!--div class="dropbox-cols">
					<div class="dropbox-col-uk">												
					</div>
					<div class="dropbox-col-eur">
						
						<ul>
							<li><a href="sending-parcel-to/Austria">Parcel to Austria</a></li>
							<li><a href="sending-parcel-to/Czech-Republic">Parcel to Czech Republic</a></li>
							<li><a href="sending-parcel-to/Denmark">Parcel to Denmark</a></li>
							<li><a href="sending-parcel-to/France">Parcel to France</a></li>
							<li><a href="sending-parcel-to/Germany">Parcel to Germany</a></li>
							<li><a href="sending-parcel-to/Greece">Parcel to Greece</a></li>
							<li><a href="sending-parcel-to/Holland-(The-Netherlands)">Parcel to Holland (Netherlands)</a></li>
							<li><a href="sending-parcel-to/Italy">Parcel to Italy</a></li>
							<li><a href="sending-parcel-to/Portugal">Parcel to Portugal</a></li>
							<li><a href="sending-parcel-to/Spain">Parcel to Spain</a></li>
							<li><a href="sending-parcel-to/Sweden">Parcel to Sweden</a></li>
							<li><a href="sending-parcel-to/Switzerland">Parcel to Switzerland</a></li>
							<li><a href="destinations"><em>View all ›</em></a></li>
						</ul>
					</div>
					
					
					<div class="clearfix"></div>
					</div>
					<div class="dropbox-view-all"><a href="http://www.sendingparcels.com/destinations/">View all destinations ›</a></div>
				</div-->
		</li>
        <li><?php echo $this->Html->link('about us',array('controller'=>'companies','action'=>'about_us'));?></li>
        <li><?php echo $this->Html->link('contact us',array('controller'=>'companies','action'=>'contact_us'));?></li>
        <li><?php echo $this->Html->link('Help',array('controller'=>'companies','action'=>'help'));?></li>
	
	
	
          <?php if($this->Session->check('user_detail')){?>
           <li>Welcome &nbsp;<?php echo $user_detail['User']['firstname'];?></li>
          <?php }?>
        
      </ul>
      <?php if($this->Session->check('user_detail')){?>
      <div class="contact-no">
        <p><?php echo $this->Html->image('user/icon1.png');?><?php echo $this->Html->link('Your account',array('controller'=>'franchises','action'=>'user_account'));?></p>
        <p><?php echo $this->Html->image('user/icon2.png');?><?php echo $this->Html->link('Logout',array('controller'=>'franchises','action'=>'user_logout'));?></p>
      </div>
      
      <?php }else{ ?>
      <div class="contact-no">
        <p><?php echo $this->Html->image('user/icon1.png');?><?php echo $this->Html->link('sign in',array('controller'=>'franchises','action'=>'signin'));?></p>
        <p><?php echo $this->Html->image('user/icon2.png');?><?php echo $this->Html->link('REGISTER',array('controller'=>'franchises','action'=>'register'));?></p>
      </div>
      <?php } ?>
    </nav>
  </div>
  <header id="header"><?php echo $this->Html->link($this->Html->image("user/logo.png",array('class'=>'logo')),array('controller'=>'companies','action'=>'index'),array('escape' => false))?><?php //echo $this->Html->image('user/logo.png',array('class'=>'logo'));?>
  <article class="head-right">
  <p><?php echo $this->Html->image('user/icon3.png');?><span>1877  435  2623</span></p>
  <article class="search">
  	<?php  echo $this->Form->create('Booking',array('url'=>array('controller'=>'companies','action'=>'track_parcel')));?>
	<?php echo $this->Form->input('reference_no',array('label'=>'','placeholder'=>'Track Your Pracel'));?>
	<?php  echo $this->Form->end('go');?>
  <!--form>
    <input type="text" value="Tracking Code" onfocus="if(this.value=='Tracking Code')this.value=''" onblur="if(this.value=='')this.value='Tracking Code'"/>
    <input type="submit" class="searchbtn" value="go" >
  </form-->
  </article>
  </article>
  
  
  </header>

  
 <!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8129-545-10-2729');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8129-545-10-2729/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->