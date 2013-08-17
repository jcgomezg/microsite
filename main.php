<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="<?php echo base_url();?>/favicon.ico" type="image/x-icon">
        <title>ONELOCAL Mobiles Couponing</title>
        
        <!-- Facebook Tags -->
        
        <meta property="og:title" content="ONELOCAL Mobiles Couponing" />
        <meta property="og:type" content="company" />
        <meta property="og:url" content="http://www.mobiles-couponing.de" />
        <meta property="og:description" content="Mehr Neukunden durch MOBILES COUPONING von ONELOCAL.  Kunde sucht online ein Produkt. Kunde findet Ihren Gutschein. Kunde kauft bei Ihnen ein." />
        <meta property="og:image" content="http://mobiles-couponing.de/assets/images/fblike.png" />
        <meta property="og:site_name" content="One Local" />
        <meta property="fb:admins" content="773260521" />
        <meta name="description" content="Mehr Neukunden durch MOBILES COUPONING von ONELOCAL.  Kunde sucht online ein Produkt. Kunde findet Ihren Gutschein. Kunde kauft bei Ihnen ein."/>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Le styles -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/scripts.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        <script src="<?php echo base_url(); ?>assets/js-src/bootstrap-tooltip.js"></script>
hfhfhf
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script>
            var map;
            function initialize() {
                
                var styles = [
                    {
                        stylers: [
                            {saturation: -60},
                            {lightness: 30},
                            {gamma: 0}
                        ]
                    }, {
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [
                            {lightness: 100},
                            {visibility: "simplified"}
                        ]
                    }, {
                        featureType: "road",
                        elementType: "labels",
                        stylers: [
                            {visibility: "off"}
                        ]
                    }
                ];

                var styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});
                
                
                
                
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(52.524577,13.406342),
                    disableDefaultUI: true,

                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
        <?php if (isset($status) && $status == 'email-sent') { ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#success').modal('show');
                });
                                                           
            </script>
        <?php } ?>

        <?php if (isset($introAnmeldung)) { ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#anmelden').modal('show');
                });
                                                           
            </script>
        <?php } ?>

    </head>
    <body>



        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=216935618363718";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>




        <!-- Button to trigger modal -->

        <!-- Modal -->
        <div id="success" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Vielen Dank</h3>
            </div>
            <div class="modal-body">
                <p>Wir haben soebend Ihre Nachricht erhalten und werden uns sobald wie möglich bei Ihnen melden.

                    Mit freundlichen Grüßen,

                    Ihr ONELOCAL OFFERS-Team</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Schließen</button>
            </div>
        </div>


        <!-- Modal -->
        <div id="anmelden" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel"><img name="ph1" src="<?php echo base_url(); ?>assets/images/onelocal-xs.png" />ONELOCAL OFFERS</h3>
            </div>
            <div class="modal-body">
                <?php
                if (isset($introAnmeldung) && !empty($introAnmeldung))
                    echo $introAnmeldung;
                echo form_open('site/anmelden');
                ?>

                <table>
                    <tr>

                        <td colspan="2">
                            <?php if (form_error('firma')) { ?> 
                                <label for="name">Firma</label><input type="text" id="frm" value="<?php echo set_value('firma'); ?>" class="span3 in-error " placeholder="Firmenname"  name="firma"/>  
                            <?php } else { ?>
                                <label for="name">Firma</label><input type="text" id="frm" class="span3 " value="<?php echo set_value('firma'); ?>" placeholder="Firmenname"  name="firma"/>  
                            <?php } ?>

                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom">
                            <?php if (form_error('partnervn')) { ?> 
                                <label for="name">Ansprechpartner</label><input type="text" value="<?php echo set_value('partnervn'); ?>" id="prtnr" placeholder="Vorname" class="span3 in-error "   name="partnervn"/> 
                            <?php } else { ?>
                                <label for="name">Ansprechpartner</label><input type="text" value="<?php echo set_value('partnervn'); ?>" id="prtnr" placeholder="Vorname" class="span3 "   name="partnervn"/>
                            <?php } ?>

                        </td>
                        <td valign="bottom">
                            <?php if (form_error('partnernn')) { ?> 
                                <input type="text" id="prtnrnn" class="span3 in-error " value="<?php echo set_value('partnernn'); ?>" Placeholder="Nachname"   name="partnernn"/>
                            <?php } else { ?>
                                <input type="text" id="prtnrnn" class="span3 " value="<?php echo set_value('partnernn'); ?>" Placeholder="Nachname"   name="partnernn"/>
                            <?php } ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php if (form_error('mailan')) { ?> 
                                <label for="mailan">E-Mail</label><input type="text" value="<?php echo set_value('mailan'); ?>" id="ml" class="span3 in-error " placeholder="E-Mail"  name="mailan"/>  
                            <?php } else { ?>
                                <label for="mailan">E-Mail</label><input type="text" id="ml" class="span3 " value="<?php echo set_value('mailan'); ?>" placeholder="E-Mail"  name="mailan"/>  
                            <?php } ?>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <?php if (form_error('telefonan')) { ?> 
                                <label for="telefonan">Telefonnummer</label><input type="text" id="tlfnmmr" value="<?php echo set_value('telefonan'); ?>" class="span3 in-error" placeholder="Telefonnummer"  name="telefonan"/>  
                            <?php } else { ?>
                                <label for="telefonan">Telefonnummer</label><input type="text" value="<?php echo set_value('telefonan'); ?>" id="tlfnmmr" class="span3 " placeholder="Telefonnummer"  name="telefonan"/>  
                            <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <?php if (form_error('gutschein')) { ?> 
                                <label for="gutschein">Haben Sie einen Gutschein</label><input type="text" id="gtschn" value="<?php echo set_value('gutschein'); ?>" class="span6 in-error " placeholder="Bitte geben Sie hier ihren Gutscheincode ein"  name="gutschein"/>  
                            <?php } else { ?>
                                <label for="gutschein">Haben Sie einen Gutschein</label><input type="text" id="gtschn" value="<?php echo set_value('gutschein'); ?>" class="span6 " placeholder="Bitte geben Sie hier ihren Gutscheincode ein"  name="gutschein"/>  
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td colspan="2">
                            <?php if (form_error('budget')) { ?> 
                                <label for="budget">Voraussichtliches Budget</label><input type="text" id="mdbdgt" value="<?php echo set_value('budget'); ?>" class="span3 in-error " placeholder="mind. 100€"  name="budget"/>                             
                                <?php
                                echo form_error('budget');
                            } else {
                                ?>
                                <label for="budget">Voraussichtliches Budget</label><input type="text" id="mdbdgt" value="<?php echo set_value('budget'); ?>" class="span3 " placeholder="mind. 100€"  name="budget"/>  
                            <?php }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>
                                Nach erfolgreicher Anmeldung werden wir Sie kontaktieren. Sie gehen mit der Anmeldung noch <strong>keine</strong> Verpflichtung ein.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="3">
                            <br/>
                            <input type="submit" class="btn btn-primary span3" value=" Kontakt aufnehmen ">

                        </td>
                    </tr>

                </table>

                </form>


            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Schließen</button>
            </div>
        </div>


        <div id="navigation" class="navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="span3" id="logo">
                        <a href="#first" > <img src="<?php echo base_url(); ?>assets/images/logo.png" /></a>
                    </div>
                    <div  id="menu" class="span5">
                        <ul>
                            <li><a href="#second">Prinzip</a></li>
                            <li><a href="#third">Vorteile</a></li>
                            <li><a href="#fourth">Kosten</a></li>
                            <li><a href="#fifth">Über uns</a></li>


                        </ul>
                    </div>

                    <div class="span3" id="phone"><h3><a href="#fifth"> 030 / 28497811</a></h3></div>


                </div>
            </div>
        </div>

        <div id="first">
            <div  class="container">
                <div id="center-intro" class="row">
                    <div class="span12">
                        <h2>Gewinnen  Sie  neue Kunden  online <br/> <span class="titel-secnd">mit ONELOCAL OFFERS</span></h2>
                    </div>
                    <div class="span3 offset1">
                        <img name="ph1" src="<?php echo base_url(); ?>assets/images/ph1.png" />
                        <p>Ein potenzieller Kunde sucht Ihr Produkt oder Ihre Dienstleistung in Ihrer Nähe.</p>
                    </div>
                    <div class="span3 ">
                        <img name="ph2" src="<?php echo base_url(); ?>assets/images/ph2.png" />

                        <p>Er oder sie sieht Ihre Rabatt-Anzeige, klickt drauf und erhält einen Coupon-Code. </p>
                    </div>
                    <div class="span3">
                        <img name="ph3" src="<?php echo base_url(); ?>assets/images/ph3.png" />

                        <p>Der Kunde kauft mit dem Gutschein ein. Bei Ihnen!</p>
                    </div>


                    <div id="go" class="span12">
                        <a  href="#second"><img src="<?php echo base_url(); ?>assets/images/btnerfahren.png" /></a>
                    </div>
                </div>

            </div>
        </div>
        <div id="canvas_holder">
            <div id="map_canvas"></div>
        </div>

        <div id="second">
            <div  class="container">
                <div id="center-second" class="row">


                    <div class="span2 offset4">
                        <p class="text-small">
                            <img id="frst" name="number-1" src="<?php echo base_url(); ?>assets/images/number-1.png" />
                            <span class="blue-small">Gesucht</span><br/>
                            Wussten Sie schon? Ein Drittel aller Suchanfragen hat einen lokalen Bezug:
                            Kunden sind mobil, das sollten Sie nutzen.
                            Werben Sie mit ONELOCAL OFFERS auf Desktops, Tablets und Smartphones.
                            Gewinnen Sie jetzt neue Kunden aus Ihrer Umgebung!
                        </p>

                        <p class="text-small_2">
                            <img id="scnd" name="number-3" src="<?php echo base_url(); ?>assets/images/number-3.png" />
                            <span class="blue-small"> Gekauft</span><br/>
                            Und nun? Wir sammeln und analysieren die Kundendaten.
                            So können wir unsere Maßnahmen stetig optimieren.
                        </p>

                    </div>
                    <div class="span2 offset4">
                        <p class="text-small_3">
                            <img id="thrd" name="number-2" src="<?php echo base_url(); ?>assets/images/number-2.png" />
                            <span class="blue-small">Gefunden</span><br/>
                            Warum Onlinebesucher in Ihren Laden kommen? Weil sie durch das Klicken
                            der Werbeanzeigen in der Google-Suche auf die Microsite gelangen, 
                            die wie für Sie erstellen. Dort erhält der Nutzer seinen Coupon-Code.
                            Diesen löst er dann beim Kauf in Ihrem Geschäft ein. Sie zahlen pro
                            geklickter Anzeige.
                        </p>


                        <div id="go2" class="span12">
                            <a href="#third"><img id="bt2" src="<?php echo base_url(); ?>assets/images/btnvorteile.png" /></a>
                        </div>


                    </div>


                </div>


            </div>
        </div>
        <div id="third">
            <div  class="container">
                <div id="center-third" class="row">

                    <div class="span12"><h2>Ihre Vorteile</h2></div>
                    <div class="span3 offset2">
                        <img name="first" src="<?php echo base_url(); ?>assets/images/first.png" />
                        <p><strong>Lokalisierbar</strong>
                            Ortsbasierte Ausspielung der Marketing Maßnahmen: Sie werben online, aber gezielt bei Kunden in Ihrer Umgebung. So werden aus Nutzern Kunden.

                        </p>

                    </div>
                    <div class="span3 ">
                        <img name="second" src="<?php echo base_url(); ?>assets/images/second.png" />

                        <p><strong>Planbar</strong>
                            Sie legen Ihr Budget fest und profitieren von der kurzen Vertragslaufzeit von 3 Monaten.

                        </p> </div>
                    <div class="span3">
                        <img name="third" src="<?php echo base_url(); ?>assets/images/third.png" />

                        <p><strong>Überprüfbar</strong>
                            Umsatzerhöhung durch messbar mehr Neukunden und Kundenbindung . 
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="span3 offset2">
                        <img name="fourth" src="<?php echo base_url(); ?>assets/images/fourth.png" />
                        <p><strong>Bezahlbar</strong>
                            Geringe Anzeigekosten und der kurze Konversionsweg von Google-Suche zum Einkauf in Ihrem Geschäft machen ONELOCAL OFFERS zu einer effizienten Marketing-Maßnahme.
                        </p>
                    </div>
                    <div class="span3 ">
                        <img name="fifth" src="<?php echo base_url(); ?>assets/images/fifth.png" />

                        <p><strong>Machbar</strong>
                            Neukunden und Kundenbindung durch Rabatte: Von ONELOCAL OFFERS können jeder Händler und Dienstleister, egal wie groß, ob bekannte Marke oder lokales Geschäft, profitieren.

                            Es funktioniert. 

                        </p></div>
                    <div class="span3">
                        <img name="sixth" src="<?php echo base_url(); ?>assets/images/sixth.png" />

                        <p><strong>Buchbar</strong>
                            Sie profitieren von professionellem Online-Marketing, während Sie sich auf Ihr Kerngeschäft konzentrieren können.
                        </p>
                    </div>
                    <div id="go3" class="span12">
                        <a href="#fourth"><img id="bt" name="button"  src="<?php echo base_url(); ?>assets/images/btnkosten.png" /></a>
                    </div>


                </div>
            </div>
        </div>

        <div id="fourth">
            <div  class="container">
                <div id="center-fourth" class="row">
                    <div class="span12"><h2>Was soll das kosten?</h2></div>
                    <div class="span12">
                        <table class="prices">
                            <tr >
                                <td class="tbleft tbtitel"><p><span class="smaller">Basic</span><br/> ab 130 € <br/><span class="smallerx">monatlich</span></p>
                                    <a href="#anmelden" role="button" class="btn btn-primary" data-toggle="modal" >
                                        <i class="icon-circle-arrow-right icon-white"></i>
                                        Jetzt anmelden
                                    </a>



                                </td>
                                <td class="tbcenter tbtitel"><p><span class="smaller">L</span><br/> ab 375 € <br/><span class="smallerx">monatlich</span></p>
                                    <a href="#anmelden" role="button" class="btn btn-primary" data-toggle="modal" >
                                        <i class="icon-circle-arrow-right icon-white"></i>
                                        Jetzt anmelden
                                    </a>
                                </td>
                                <td class="tbright tbtitel"><p><span class="smaller">XL</span><br/> ab 720 € <br/><span class="smallerx">monatlich</span></p>

                                    <a href="#anmelden" role="button" class="btn btn-primary" data-toggle="modal" >
                                        <i class="icon-circle-arrow-right icon-white"></i>
                                        Jetzt anmelden
                                    </a>

                                </td>
                            </tr>
                            <tr class="secondrow">
                                <td class="tbleft"><p><strong>Mediabudget Google</strong> 100-300 €<a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Mediabudget = Klickpreis*Anzahl der Klicks"><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a></p>

                                </td>
                                <td class="tbcenter"><p><strong>Mediabudget Google</strong> 300-600 €<a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Mediabudget = Klickpreis*Anzahl der Klicks"><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a></p>

                                </td>
                                <td class="tbright"><p><strong>Mediabudget Google</strong> ab 600 €<a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Mediabudget = Klickpreis*Anzahl der Klicks"><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a></p>

                                </td>
                            </tr>
                            <tr class="thirdrow">
                                <td class="tbleft"><p><strong>ONELOCAL OFFERS</strong><a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Sie investieren in ONELOCAL OFFERS 30% des Mediabudgets. Damit garantieren wir eine ständige Optimierung auf Ihre Bedürfnisse."><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a> <br/>30 % des Mediabudgets</p>
                                </td>
                                <td class="tbcenter"><p><strong>ONELOCAL OFFERS<a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Sie investieren in ONELOCAL OFFERS 25% des Mediabudgets. Damit garantieren wir eine ständige Optimierung auf Ihre Bedürfnisse."><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a></strong> <br/>25 % des Mediabudgets</p>
                                </td>
                                <td class="tbright"><p><strong>ONELOCAL OFFERS</strong><a title="" class="tt" data-placement="right" data-toggle="tooltip"  data-original-title="Sie investieren in ONELOCAL OFFERS 20% des Mediabudgets. Damit garantieren wir eine ständige Optimierung auf Ihre Bedürfnisse."><img class="info" src="<?php echo base_url(); ?>assets/images/info.png" /></a><br/> 20 % des Mediabudgets</p>
                                </td>
                            </tr>
                            <tr class="fourthrow">
                                <td class="tbleft"><p><strong>Einmalige Einrichtungsgebühr </strong><br/>99 €</p>
                                </td>
                                <td class="tbcenter"><p><strong>Einmalige Einrichtungsgebühr </strong><br/>49 €</p>
                                </td>
                                <td class="tbright"><p><strong>Einmalige Einrichtungsgebühr </strong><br/>inklusive</p>
                                </td>
                            </tr>
                            <tr class="fifthrow">
                                <td class="tbleft"><p><strong>Mindestlaufzeit</strong> 3 Monate </p>
                                </td>
                                <td class="tbcenter"><p><strong>Mindestlaufzeit</strong> 3 Monate </p>
                                </td>
                                <td class="tbright"><p><strong>Mindestlaufzeit</strong> 3 Monate </p>
                                </td>
                            </tr>
                            <tr class="sixth">
                                <td class="tbleft"><p><strong>Microsite</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbcenter"><p><strong>Microsite</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbright"><p><strong>Microsite</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                            </tr>
                            <tr class="seventhrow">
                                <td class="tbleft"><p><strong>Hosting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbcenter"><p><strong>Hosting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbright"><p><strong>Hosting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                            </tr>
                            <tr class="eigthrow">
                                <td class="tbleft"><p><strong>Telefonsupport</strong> 1 Mal/Monat </p>
                                </td>
                                <td class="tbcenter"><p><strong>Telefonsupport</strong> 1 Mal/Woche </p>
                                </td>
                                <td class="tbright"><p><strong>Telefonsupport</strong> Täglich </p>
                                </td>
                            </tr>
                            <tr class="ninthrow">
                                <td class="tbleft"><p><strong>Persönlicher Ansprechpartner</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbcenter"><p><strong>Persönlicher Ansprechpartner</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbright"><p><strong>Persönlicher Ansprechpartner</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                            </tr>
                            <tr class="tenthrow">
                                <td class="tbleft"><p><strong>Tracking</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbcenter"><p><strong>Tracking</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbright"><p><strong>Tracking</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                            </tr>
                            <tr class="eleventhrow">
                                <td class="tbleft"><p><strong>Reporting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbcenter"><p><strong>Reporting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                                <td class="tbright"><p><strong>Reporting</strong> <img src="<?php echo base_url(); ?>assets/images/ok.png" /> </p>
                                </td>
                            </tr>                                                     
                            <tr class="under">
                                <td >
                                    <p class="smaller">*alle Preise sind Netto-Angaben </p>
                                </td>
                                <td >
                                </td>
                                <td >
                                </td>
                            </tr>

                        </table>


                    </div>

                    <div  class="span8 offset1">
                        <p><strong>Was bekomme ich für das Klickbudget?</strong><br/>Bei Google AdWords bezahlen Sie nur für tatsächlich getätigte Klicks auf Ihre Anzeigen, d.h. nur für Besucher Ihrer Website. Wie teuer ein einzelner Klick ist, hängt vor allem davon ab, wie hoch der Wettbewerb um die Suchbegriffe (Keywords) ist, bei denen Ihre Anzeigen geschaltet werden sollen. Klickpreise beginnen bei ca. 0,30 - 0,50€; Prognosen sind möglich, aber am besten ist ein Test in der Realität. Durch die Angabe von maximalen Geboten und Tagesbudgets besteht volle Kostenkontrolle, außerdem optimieren wir die Kampagnen stetig.
                        </p>

                    </div>
                    <div id="go4" class="span12">
                        <a href="#fifth"><img src="<?php echo base_url(); ?>assets/images/btnueberzeugt.png" /></a>
                    </div>

                </div>


            </div>

        </div>

        <div id="fifth">
            <div id="go5" class="span12">
                <a href="mailto:hallo@onelocal.de"><img src="<?php echo base_url(); ?>assets/images/btnberaten.png" /></a>
            </div>
            <div  class="container">
                <div id="center-fifth" class="row">
                    <div class="span12"><h2>Überzeugt?</h2></div>
                    <div class="span5 offset1"><p><strong>Profitieren Sie von der Expertise unserer Profis</strong><br/>
                            Im ONELOCAL-Team kümmern sich Marketing-Fachleute, Social Media-Experten, erfahrene Betriebswirte, versierte Programmierer und erfolgreiche Werber um Ihren Geschäftserfolg. ONELOCAL wurde aus der Werbeagentur Pretzlaw Communications gegründet, die seit mehr als 15 Jahren sehr erfolgreich kleine und mittelständische Kunden betreut.

                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="span3 offset4">
                        <img src="<?php echo base_url(); ?>assets/images/voigt.png" />
                        <p><strong>Martin Voigt</strong><br/>
                            Key Account Manager<br/>

                            030 / 28 49 78 - 11<br/>
                            <a href="mailto:martin.voigt@onelocal.de">martin.voigt@onelocal.de</a>

                        </p>
                    </div>

                    <div class="span3 ">
                        <img src="<?php echo base_url(); ?>assets/images/misch.png" />
                        <br/>
                        <p><strong>Marten Misch</strong><br/>
                            Key Account Manager<br/>
                            030 / 28 49 78 - 11<br/>
                            <a href="mailto:marten.misch@onelocal.de">marten.misch@onelocal.de</a>

                        </p>
                    </div>

                    <div class="span8 offset4">
                        <h3>

                            <strong>Rufen Sie uns an:</strong> 030/2849 7811<br/>
                            <strong>Oder mailen Sie:</strong> hallo@onelocal.de

                        </h3>
                    </div>

                    <div id="contactform" class="span11 ">
                        <?php echo form_open('site/call'); ?>
                            <table id="tbform">
                                <tr>
                                    <td colspan="3">
                                        <h3>Rückrufformular</h3>
                                    </td>
                                </tr>

                                <?php
                                if (isset($intro) && !empty($intro)) {
                                    ?>
                                    <tr>
                                        <td colspan="3">
                                            <?php echo $intro ?>
                                        </td>
                                    </tr>

                                <?php } ?>

                                <tr>
                                    <td>
                                        <?php if (form_error('name')) { ?> 
                                            <label for="name">Ihr Name</label><input value="<?php echo set_value('name'); ?>" type="text" class="span3 in-error" id="nm"  name="name"/>
                                        <?php } else { ?>
                                            <label for="name">Ihr Name</label><input value="<?php echo set_value('name'); ?>" type="text" class="span3 " id="nm"  name="name"/>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if (form_error('phone')) { ?> 
                                            <label for="phone">Ihre Telefonnummer</label><input type="text" class="span3 in-error" id="pn"  name="phone"/>
                                        <?php } else { ?>
                                            <label for="phone">Ihre Telefonnummer</label><input type="text" class="span3 " id="pn"  name="phone"/>
                                        <?php } ?>
                                    </td>
                                    <td>

                                        <input type="submit" class="btn btn-primary span3" value=" Zurückrufen ">

                                    </td>
                                </tr>
                            </table>

                        </form>

                    </div>


                </div>
            </div>
        </div>

        <div id="sixth">
            <div  class="container">
                <div id="center-sixth" class="row">
                    <div class="span6 ">
                        <div class="fb-like" data-href="http://www.facebook.com/onelocalde" data-send="true" data-width="450" data-show-faces="true"></div>

                        <div id="socialnt">
                            <table>
                                <tr>
                                    <td><a href="http://www.facebook.com/onelocalde" target="_blank" ><img src="<?php echo base_url(); ?>assets/images/fb.png" /></a></td>
                                    <td><a href="http://www.twitter.com/onelocalde" target="_blank" ><img src="<?php echo base_url(); ?>assets/images/tw.png" /></a></td>
                                    <td><a href="https://plus.google.com/u/0/b/109546229382125554268/109546229382125554268/posts" target="_blank" ><img src="<?php echo base_url(); ?>assets/images/gg.png" /></a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="impressum">
                            <div id="impressum-left">
                                <h3> Impressum</h3>
                                <p>Pretzlaw Communications GmbH
                                    <br/>Neue Schönhauser Straße 20<br/>
                                    10178 Berlin</p>

                                <p><a href="http://www.pretzlaw.de " target="_blank">http://www.pretzlaw.de</a>                           
                                    <a href="mailto:info@pretzlaw.de">info@pretzlaw.de</a></p>

                                <p>Tel: +49 (0) 30/28 49 78 – 0<br/>                     
                                    Fax: +49 (0) 30/28 49 78 28</p>

                            </div>
                            <div id="impressum-right">

                                <p>Geschäftsführer:<br/> Christian Pretzlaw,<br/> Martin Pretzlaw</p>

                                <p>Firmensitz Berlin<br/>
                                    Amtsgericht Charlottenburg<br/>
                                    HRB 69650 B</p>

                                <p>USt-IdNr.: DE812677968</p>

                            </div>
                            <br/>
                            <a class="btn btn-primary" id="zuruck" href="#" role="button" data-toggle="modal">

                                www.pretzlaw.de
                            </a>
                        </div>
                    </div>
                    <div class="span4 offset1" id="newsletter">
                        <h3> Newsletter</h3>
                        <br/>
                        <?php echo form_open('site/newsletter'); ?>

                        <?php
                        if (isset($introNewsletter) && !empty($introNewsletter)) {
                            ?>
                            <tr>
                                <td colspan="3">
                                    <?php echo $introNewsletter ?>
                                </td>
                            </tr>

                        <?php } ?>
                        <?php if (form_error('namenl')) { ?> 
                            <label for="name">Ihr Name</label><input type="text" id="nmnl" class="span3 in-error"   name="namenl"/>
                        <?php } else { ?>
                            <label for="name">Ihr Name</label><input type="text" id="nmnl" class="span3 "   name="namenl"/>
                        <?php } ?>
                        <?php if (form_error('mail')) { ?> 
                            <label for="mail">Ihre E-Mail Adresse</label><input id="mlnl" type="text" class="span3 in-error" id="mail"  name="mail"/>
                        <?php } else { ?>
                            <label for="mail">Ihre E-Mail Adresse</label><input id="mlnl" type="text" class="span3 " id="mail"  name="mail"/>
                        <?php } ?>

                        <br/>
                        <input type="submit" class="btn btn-primary span3" value=" Senden ">

                        </form>
                    </div>



                </div>
            </div>
        </div>





    </body>
</html>