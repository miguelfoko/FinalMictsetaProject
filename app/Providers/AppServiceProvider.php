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
    public function boot()
    {
        $sliders = Slider::all();
        View::share('sliders', $sliders);
        $footerElement = Footer::orderby('id', 'desc')->paginate(10);
        View::share('footerElement', $footerElement);
        $news = News::orderBy('id','desc')->paginate(3);
        View::share('news', $news);
        $succesfulTvetGraduates = SuccesfulTvetGraduates::orderBy('id','desc')->paginate(3);
        View::share('succesfulTvetGraduates', $succesfulTvetGraduates);
    }
}
