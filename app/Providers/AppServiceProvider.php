<?php

namespace App\Providers;
use App\Models\Slider;
use App\Models\Footer;
use App\Models\News;
use App\Models\SuccesfulTvetGraduates;
use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void 
     */
    public function boot(){
        //A mettre sur le serveur pour acceptation des requêtes https et http
        //if (APP::environment('production')){
        //    URL::forceScheme('https');
        //}
        //Fin
        $sliders = Slider::orderby('id', 'desc')->paginate(100);
        View::share('sliders', $sliders);
        $news = News::orderBy('id','desc')->paginate(3);
        View::share('news', $news);
        $succesfulTvetGraduates = SuccesfulTvetGraduates::orderBy('id','desc')->paginate(3);
        View::share('succesfulTvetGraduates', $succesfulTvetGraduates);
        
    }
}
