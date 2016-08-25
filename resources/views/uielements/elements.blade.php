@extends('layouts.app')

@section('content')

<div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-3">
                    <div class="ibox">
                        <div class="ibox-content" id="users">
                            <h2>UI Elements</h2>
                            <p>
                                Godkendte elementer der kan bruges på siden
                            </p>
                            <div class="input-group">
                                <input type="text" placeholder="Søg element " class="search input form-control">
                                <span class="input-group-btn ">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Go!</button>
                                </span>
                            </div>
                            <div class="clients-list">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody class="list">
                                                <tr>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link name" aria-expanded="true">Headings</a></td>
                                                    <td>Typography</td>
												 </tr>
												 <tr>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link name" aria-expanded="true">Paragraph text</a></td>
                                                    <td>Typography</td>
												 </tr>
												 <tr>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link name" aria-expanded="true">Unstyled list</a></td>
                                                    <td>Typography</td>
												 </tr>
												  <tr>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link name" aria-expanded="true">Unordered list</a></td>
                                                    <td>Typography</td>
												 </tr>
												  <tr>
                                                    <td><a data-toggle="tab" href="#contact-5" class="client-link name" aria-expanded="true">Ordered list</a></td>
                                                    <td>Typography</td>
												 </tr>
												  <tr>
                                                    <td><a data-toggle="tab" href="#contact-6" class="client-link name" aria-expanded="true">Unstyled list</a></td>
                                                    <td>Typography</td>
												 </tr>
												  <tr>
                                                    <td><a data-toggle="tab" href="#contact-7" class="client-link name" aria-expanded="true">Unstyled list</a></td>
                                                    <td>Typography</td>
												 </tr>
												  <tr>
                                                    <td><a data-toggle="tab" href="#contact-8" class="client-link name" aria-expanded="true">Unstyled list</a></td>
                                                    <td>Typography</td>
												 </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 365.112px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                                </div>
                                
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="ibox ">
                        <div class="ibox-content">
                            <div class="tab-content">
                                <div id="contact-1" class="tab-pane">
                                    <div class="ibox-content">
				                        <h1>Heading 1
				                            <small>Sub-heading</small>
				                        </h1>
				                        <h2>Heading 2
				                            <small>Sub-heading</small>
				                        </h2>
				                        <h3>Heading 3
				                            <small>Sub-heading</small>
				                        </h3>
				                        <h4>Heading 4
				                            <small>Sub-heading</small>
				                        </h4>
				                        <h5>Heading 5
				                            <small>Sub-heading</small>
				                        </h5>
				                        <h6>Heading 6
				                            <small>Sub-heading</small>
				                        </h6>
				                    </div>
                       			</div>
                       			<div id="contact-2" class="tab-pane">
                                    <div class="ibox-content">
                      				  <p>Lorem ipsum <strong>eget urna mollis</strong> ornare vel eu leo. <em>Cum sociisnatoque penatibus</em> et magnis dis parturient montes, <code>code</code> nascetur
                         			   ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Sed euismod aliquet sapien consequat tincidunt.</p>

                       				 <p>Vivamus sagittis lacus vel augue laoreet <abbr title="" data-original-title="Sample abbreviation">rutrum faucibus dolor auctor</abbr>. Duis mollis, est non commodo
                       			     luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Sed euismod aliquet sapien consequat tincidunt.</p>

                     			   <p>
                   			         But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual.
                   			     </p>
                 				   </div>
                       			</div>
                       			<div id="contact-3" class="tab-pane">
                                    <div class="ibox-content">
				                        <ul class="unstyled">
				                            <li>But I must explain </li>
				                            <li>To you how all this mistaken</li>
				                            <li>Idea of denouncing pleasure </li>
				                            <li>Great explorer of the truth</li>
				                            <li>To take a trivial example
				                                <ul>
				                                    <li>Or one who avoids a pain</li>
				                                    <li>Indignation and dislike men</li>
				                                    <li>Nor again is there anyone </li>
				                                    <li>But who has any right</li>
				                                </ul>
				                            </li>
				                            <li>That they cannot foresee</li>
				                            <li>Who avoids a pain that produceg</li>
				                            <li>Consequences that are extremely </li>
				                        </ul>
				                    </div>
                       			</div>
                       			<div id="contact-4" class="tab-pane">
                                    <div class="ibox-content">
				                        <ul>
				                            <li>But I must explain </li>
				                            <li>To you how all this mistaken</li>
				                            <li>Idea of denouncing pleasure </li>
				                            <li>Great explorer of the truth</li>
				                            <li>To take a trivial example
				                                <ul>
				                                    <li>Or one who avoids a pain</li>
				                                    <li>Indignation and dislike men</li>
				                                    <li>Nor again is there anyone </li>
				                                    <li>But who has any right</li>
				                                </ul>
				                            </li>
				                            <li>That they cannot foresee</li>
				                            <li>Who avoids a pain that produceg</li>
				                            <li>Consequences that are extremely </li>
				                        </ul>
				                    </div>
                       			</div>
                       			<div id="contact-5" class="tab-pane">
                                    <div class="ibox-content">
				                        <ol>
				                            <li>But I must explain </li>
				                            <li>To you how all this mistaken</li>
				                            <li>Idea of denouncing pleasure </li>
				                            <li>Great explorer of the truth</li>
				                            <li>To take a trivial example
				                                <ol>
				                                    <li>Or one who avoids a pain</li>
				                                    <li>Indignation and dislike men</li>
				                                    <li>Nor again is there anyone </li>
				                                    <li>But who has any right</li>
				                                </ol>
				                            </li>
				                            <li>That they cannot foresee</li>
				                            <li>Who avoids a pain that produceg</li>
				                            <li>Consequences that are extremely </li>
				                        </ol>
				                    </div>
                       			</div>
                       			<div id="contact-6" class="tab-pane">
                                    
                       			</div>
                       			<div id="contact-7" class="tab-pane">
                                    
                       			</div>
                       			<div id="contact-8" class="tab-pane">
                                    
                       			</div>
                       			<div id="contact-9" class="tab-pane">
                                    
                       			</div>
                       			<div id="contact-10" class="tab-pane">
                                    
                       			</div>
                            </div>








                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://listjs.com/no-cdn/list.js"></script>
<script type="text/javascript">
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>

@endsection