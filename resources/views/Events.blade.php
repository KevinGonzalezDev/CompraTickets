@extends('layout.general')

@section('content')
        <style>
            body{
                background-image:none;
            }
            .footerPage{
                display:none;
            }
        </style>
        <div >
            <table width ="100%">
                <tr>
                    <td class = 'Margin '>
                        <table width ='100%'>
                            <tr>
                                <td style = 'text-align:right;vertical-align: middle;'>
                                    <img src ='image/tel.png' class = 'ImgMini'/>
                                    <span class = 'TextTel'>(57) 724 0280</span>
                                    <img src ='image/tel.png' class = 'ImgMini'/>
                                    <span class = 'TextTel'>302 423 6250</span>
                                </td>
                            </tr>
                        </table>
                        <table width ='100%'>
                            <tr>
                                <td style = 'text-align:left;vertical-align: middle;'>
                                    <img src ='image/logo.png' />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
            <table width ="100%" class = 'BarraMenu'>
                <tr>
                    <td class = 'Margin '>
                        <table width = '100%' class = 'Menus'>
                            <tr>
                                <td >
                                    <a href = '#Inicio' class = 'IconMenu'>
                                        INICIO
                                    </a>
                                </td>
                                <td >
                                    <a href = '#Qs' class = 'IconMenu'>
                                        QUÉ ES Y POR QUÉ PARTICIPAR
                                    </a>
                                </td>
                                <td >
                                    <a href = '#tarifas' class = 'IconMenu'>
                                        TARIFAS
                                    </a>
                                </td>
                                <td >
                                    <a href = '#workshp' class = 'IconMenu'>
                                        AGENDA
                                    </a>
                                </td>
                                <td >
                                    <a href = '#workshp' class = 'IconMenu'>
                                        PATROCINIO
                                    </a>
                                </td>
                                <td >
                                    <a href = '#spons' class = 'IconMenu'>
                                        SPONSORS
                                    </a>
                                </td>
                                <td style = 'text-align:center;'>
                                    <a href = '{{route('SeleccionBoletas')}}' class = 'IconMenu'>
                                        COMPRAR TICKETS
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <table width ="100%" id = 'Inicio'>
                <tr>
                    <td class = 'Margin flex-center'>
                        <div class="w3-content w3-display-container">
                          <img class="mySlides" src="image/banner_evento.png" class = 'BannerEvents'>
                          <img class="mySlides" src="image/01KV-BPro-050220.png" class = 'BannerEvents'>
                          <img class="mySlides" src="image/banner_evento.png" class = 'BannerEvents'>
                        </div>
                    </td>
                </tr>
            </table>
            <br><br>
            

            <table width ="100%" class = 'Invitados'>
                <tr>
                    <td class = 'Margin '>
                        <table width = '100%' class = 'Menus'>
                            <tr>
                                <td nowrap style = 'text-align:center;'>
                                    <div class = 'Circular'></div>
                                </td>
                                <td nowrap style = 'text-align:center;'>
                                    <div class = 'Circular'></div>
                                </td>
                                <td nowrap style = 'text-align:center;'>
                                    <div class = 'Circular'></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br><br>
            <table width ="100%" id = 'Qs'>
                <tr>
                    <td class = 'Margin'>
                        <span class = 'Qs flex-center'>¿Qué es y por qué participar?</span>
                        <table width = '100%' class = 'Menus' >
                            <tr>
                                <td nowrap style = 'text-align:center;'>
                                    <img src ='image/qs.png' class = 'BannerEvents'/>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
            <img src ='image/info.png' class = 'BannerEvents' style ='width:100%;' />
            <br><br>
            <img src ='image/tarifas.png' width = '100%' id = 'tarifas'/>
            
            <img src ='image/wo.png' width = '100%' id = 'workshp'/>
            
            <img src ='image/sponsor.png' width = '100%' id = 'spons'/>
            <img src ='image/banner.png' width = '100%' id = 'workshp'/>
        </div>
@endsection
