<?php

use App\Http\Controllers\SaveTransaction;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthSeller;
use App\Http\Middleware\AuthSuperAdmin;
use App\Livewire\AboutComponent;
use App\Livewire\AccountSettingComponent;
use App\Livewire\Admin\AddBlogCategory;
use App\Livewire\Admin\AddBlogTag;
use App\Livewire\Admin\AddTag;
use App\Livewire\Admin\Blogcategories;
use App\Livewire\Admin\BlogsComponent;
use App\Livewire\Admin\Blogtags;
use App\Livewire\Admin\EditBlog;
use App\Livewire\Admin\EditBlogCategory;
use App\Livewire\Admin\EditCategory;
use App\Livewire\Admin\EditContent;
use App\Livewire\Admin\EditTag;
use App\Livewire\Admin\HomeSlider;
use App\Livewire\Admin\ManageTags;
use App\Livewire\Admin\ModifyComponent;
use App\Livewire\Admin\NewBlog;
use App\Livewire\Admin\NewSlider;
use App\Livewire\AdminAddAuthorComponent;
use App\Livewire\AdminAddUserComponent;
use App\Livewire\AdminAuthorComponent;
use App\Livewire\AdminCategoryComponent;
use App\Livewire\AdminBooksComponent;
use App\Livewire\AdminAddCategoryComponent;
use App\Livewire\AdminAddBookComponent;
use App\Livewire\AdminDashboardComponent;
use App\Livewire\BlogsPerCategory;
use App\Livewire\BookPageComponent;
use App\Livewire\BookPdfComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\DisplayBlogs;
use App\Livewire\Expert\AddNewContent;
use App\Livewire\Expert\ExpertDashboard;
use App\Livewire\Expert\MyContent;
use App\Livewire\Expert\MySales;
use App\Livewire\HomeComponent;
use App\Livewire\Pages\AllProducts;
use App\Livewire\Pages\BlogDetails;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\ContentPerTag;
use App\Livewire\Pages\SearchResults;
use App\Livewire\ProfileComponent;
use App\Livewire\ProfileEditComponent;
use App\Livewire\Super\SuperAdminDashboard;
use App\Livewire\User\MyPurchases;
use App\Livewire\UserListComponent;
use App\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Manage Redirect
Route::get('/dashboard', function () {
    $user = Auth::user();
    // Check if user is authenticated
    if ($user) {
        // Redirect based on user type (utype)
        switch ($user->utype) {
            case 'byr':
                return redirect()->route('buyer.dashboard');
                break;
            case 'slr':
                return redirect()->route('expert.dashboard');
                break;
            case 'adm':
                return redirect()->route('admin.dashboard');
                break;
            case 'sadm':
                return redirect()->route('super.dashboard');
                break;
            default:
                abort(403);
                break;
        }
    } else {
        return redirect('/login');
    }
})->name('user.dashboard');
// Buyer Routes
Route::get('/', HomeComponent::class)->name('buyer.dashboard');
Route::get('/about-us', AboutComponent::class)->name('about.us');
Route::get('/content/{reference}/{slug}', BookPageComponent::class)->name('content.details');
Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
Route::get('/category/{slug}', CategoryComponent::class)->name('category');
Route::get('blogs/{reference}/{slug}', BlogDetails::class)->name('blog.details');
Route::get('/all-products', AllProducts::class)->name('products.all');
Route::get('/tags/{name}', ContentPerTag::class)->name('tag.content');
Route::get('/blogs', DisplayBlogs::class)->name('display.blogs');
Route::get('/contact', ContactUs::class)->name('contact');
Route::get('/blogs/{slug}', BlogsPerCategory::class)->name('blogs.per.category');
Route::get('/search/{value}', SearchResults::class)->name('search.results');

// Authenticated user
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/view/{reference}', BookPdfComponent::class)->name('content.view');
    Route::get('/checkout', CheckoutComponent::class)->name('checkout');
    Route::get('/profile-edit', ProfileEditComponent::class)->name('profile.edit');
    Route::get('/acount-setting', AccountSettingComponent::class)->name('account.settings');
    Route::get('/account/dashboard', MyPurchases::class)->name('user.purchases');
});

// Seller Routes
Route::prefix('/expert')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthSeller::class])->group(function () {
    Route::get('dashboard', ExpertDashboard::class)->name('expert.dashboard');
    Route::get('/expert-profile', ProfileComponent::class)->name('user.profile');
    Route::get('/content', MyContent::class)->name('expert.content');
    Route::get('/sales', MySales::class)->name('expert.sales');
    Route::get('/add-content', AddNewContent::class)->name('expert.content.add');
});

// Admin Routes
Route::prefix('/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthAdmin::class])->group(function () {
    Route::get('/add-user', AdminAddUserComponent::class)->name('user.add');
    Route::get('/add-expert', AdminAddAuthorComponent::class)->name('expert.add');
    Route::get('/add-content', AdminAddBookComponent::class)->name('content.add');
    Route::get('/edit-content/{item_id}', EditContent::class)->name('content.edit');
    Route::get('/add-category', AdminAddCategoryComponent::class)->name('category.add');
    Route::get('/experts', AdminAuthorComponent::class)->name('admin.experts');
    Route::get('/content', AdminBooksComponent::class)->name('admin.content');
    Route::get('/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/edit/category/{cat_id}', EditCategory::class)->name('category.edit');
    Route::get('/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/users', UserListComponent::class)->name('users');
    Route::get('/tags', ManageTags::class)->name('admin.tags');
    Route::get('/add-tag', AddTag::class)->name('tag.add');
    Route::get('/edit/content/tag/{tag_id}', EditTag::class)->name('tag.edit');
    Route::get('/sliders', HomeSlider::class)->name('sliders');
    Route::get('/new-slider', NewSlider::class)->name('slider.add');
    Route::get('/blogs', BlogsComponent::class)->name('admin.blogs');
    Route::get('/add-blog', NewBlog::class)->name('blog.new');
    Route::get('/edit/blog/{blog_id}',EditBlog::class)->name('blog.edit');
    Route::get('/pages/modifications', ModifyComponent::class)->name('pages.content');
    Route::get('/blog-categories', Blogcategories::class)->name('blog.categories');
    Route::get('/blog-tags', Blogtags::class)->name('blog.tags');
    Route::get('/add-blog-category', AddBlogCategory::class)->name('blog.category.add');
    Route::get('/edit/blog/category/{cat_id}', EditBlogCategory::class)->name('blog.category.edit');
    Route::get('/add-blog-tag', AddBlogTag::class)->name('blog.add.tag');
});

// Super Admin Routes
Route::prefix('/super/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthSuperAdmin::class])->group(function () {
    Route::get('dashboard', SuperAdminDashboard::class)->name('super.dashboard');
});

// Dump Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    Route::post('/callback-url', [SaveTransaction::class, 'saveTransaction'])->name('save.transaction');
});
