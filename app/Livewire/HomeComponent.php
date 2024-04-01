<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Content;
use App\Models\ExpertProfile;
use App\Models\Purchase;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $recentContent = Content::orderByDesc('created_at')->where('status', 'published')->limit(20)->get();
        $experts = User::orderBy('name')->where('utype', 'slr')->get();
        $nowTrending = Purchase::select('content_id', DB::raw('COUNT(*) as purchase_count'))
            ->groupBy('content_id')
            ->orderByDesc('purchase_count')
            ->limit(10)
            ->get();
        $sliders = Slider::orderByDesc('created_at')
            ->whereDate('from', '<=', Carbon::now())
            ->whereDate('to', '>=', Carbon::now())
            ->get();
        $blogs=Blog::orderByDesc('views')->limit(10)->get();
        return view('livewire.home-component', ['sliders' => $sliders, 'categories' => $categories,'blogs'=>$blogs, 'nowTrending' => $nowTrending, 'recentContent' => $recentContent, 'experts' => $experts])->layout('layouts.base');
    }
}
