<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>BPRO</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="../css/all.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap4-toggle.min.css" rel="stylesheet">
        <link href="../css/fontawesome.css" rel="stylesheet">
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PG5RX92');</script>
		<!-- End Google Tag Manager -->
        <?php echo '<script type="text/javascript" src = "../js/datatables.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <?php echo '<script type="text/javascript" src = "../js/bootstrap4-toggle.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <link rel="stylesheet" type="text/css" href="../css/datatables.min.css"/>
        <?php echo '<script type="text/javascript" src = "../js/dataTables.bootstrap4.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/dataTables.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <?php echo "<link rel='stylesheet' href='../css/generalPage.css?v=".date("Y-m-d H:i:s")."'>";?>
        
        <?php echo '<script type="text/javascript" src = "../js/jquery-ui.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/config.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <?php echo '<script type="text/javascript" src = "../js/popper.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/bootstrap.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>


        <?php echo '<script type="text/javascript" src = "../js/jquery-ui.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/bootstrap-datepicker.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/jquery.creditCardValidator.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=DC-9738639"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'DC-9738639');
		</script>
		
		<script>
		  gtag('event', 'conversion', {
			'allow_custom_scripts': true,
			'send_to': 'DC-9738639/invmedia/cxsum00+standard'
		  });
		</script>
		<noscript>
		<img src="https://ad.doubleclick.net/ddm/activity/src=9738639;type=invmedia;cat=cxsum00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?" width="1" height="1" alt=""/>
		</noscript>
		
        <style>
            
        </style>
    </head>
    <body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG5RX92"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
        {{ csrf_field() }}
        @yield('content')
        <div class = 'footerPage'>
            <table width ='100%'>
                <tr>
                    <td style = 'width:80%;'>
                        <span class ='flex-center'>Asociación Colombiana de BPO | Calle 99 No. 7A-77 oficina 506 - Edificio ADVANCE | Mail: info@bpro.org POLITICAS DE PRIVACIDAD | Derechos Reservados 2019 | Webmaster: Nexum</span>
                    </td>
                    <td>
                        <table width ='100%'>
                            <tr>
                                <td style = 'text-align:Center;'>
                                    <a href ='#' class = 'Redess'>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </td>
                                <td style = 'text-align:Center;'>
                                    <a href ='#' class = 'Redess'>
                                        <i class="fas fa-mail-bulk"></i>
                                    </a>
                                </td>
                                <td style = 'text-align:Center;'>
                                    <a href ='#' class = 'Redess'>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </td>
                                <td style = 'text-align:Center;'>
                                    <a href ='#' class = 'Redess'>
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
        </div>
        <div class = 'footerPage2'>Copyright 2020 Event Landing Page - All rights reserved.</div>
        <div class="modal fade" id="ModalEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ModalEdit" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" id = "ModalContentForm" >
                <div class="content_modal modal-content">

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                nextPaso(0)
                var slideIndex = 0;
                carousel();

            })
        </script>
		<script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '367353720934573');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=367353720934573&ev=PageView&noscript=1"
            /></noscript>
    </body>
</html>
