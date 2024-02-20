<nav class="navbar navbar-expand-lg bg-dark">
 
    <div class="container-fluid">

        <style type="text/css">
            .textblanco{
                color: white;
            }
        </style>
   
    
        <div class="collapse navbar-collapse imgHome" id="navbarSupportedContent">

            <a class="navbar-brand logo-image" href="index.html">
                <img src="images/Krobady_3D_Studio_25.png" alt="" width="30%">
            </a>

            <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-left: 30%;">
        
                <li class="nav-item">
                    <a class="nav-link page-scroll textblanco" href="#header"> {{ trans('header.Start')}} </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll textblanco" href="#intro">{{ trans('header.Intro')}}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll textblanco" href="#projects">{{ trans('header.Projects')}}</a>
                </li>
                        
                <li class="nav-item">
                    <a class="nav-link page-scroll textblanco" href="#services2">{{ trans('header.Services')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll textblanco" href="#contact">{{ trans('header.Contact')}}</a>
                </li>
               
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle textblanco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true" >
                           
                        {{ trans('welcome.idioma')}}  
                           
                        @if (config('app.locale') === 'es')
                            <img src="images/flag/es.png" width="15px" align="left"/>
                        @elseif (config('app.locale') === 'en')
                            <img src="images/flag/en.png" width="15px" align="left"/>
                        @elseif (config('app.locale') === 'fr')
                            <img src="images/flag/fr.png" width="15px" align="left"/>
                        @endif 
                    </a> 
          
                    <ul class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="active padDrop">
                            <a class="aDrop" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-expanded="true">
                                
                                {{ $properties['native'] }}

                                @if ( $properties['native'] === 'Español')
                                    <img src="images/flag/es.png" width="15px" align="left"/>
                                @elseif ($properties['native'] === 'English')
                                    <img src="images/flag/en.png" width="15px" align="left"/>
                                @elseif ($properties['native'] === 'Français')
                                    <img src="images/flag/fr.png" width="15px" align="left"/>
                                @endif           
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
       
            </ul>
           
      </div>
    </div>
</nav>

