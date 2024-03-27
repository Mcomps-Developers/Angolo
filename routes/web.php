<?php

use App\Http\Controllers\SaveTransaction;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthBuyer;
use App\Http\Middleware\AuthSeller;
use App\Http\Middleware\AuthSuperAdmin;
use App\Livewire\AccountSettingComponent;
use App\Livewire\Admin\AddTag;
use App\Livewire\Admin\ManageTags;
use App\Livewire\AdminAddAuthorComponent;
use App\Livewire\AdminAddUserComponent;
use App\Livewire\AdminAuthorComponent;
use App\Livewire\AdminCategoryComponent;
use App\Livewire\AdminBooksComponent;
use App\Livewire\AdminAddCategoryComponent;
use App\Livewire\AdminAddBookComponent;
use App\Livewire\AdminDashboardComponent;
use App\Livewire\BlankPageComponent;
use App\Livewire\BookPageComponent;
use App\Livewire\BookPdfComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\Expert\AddNewContent;
use App\Livewire\Expert\ExpertDashboard;
use App\Livewire\Expert\MyContent;
use App\Livewire\Expert\MySales;
use App\Livewire\HomeComponent;
use App\Livewire\PagesComingSoonComponent;
use App\Livewire\PagesConfirmMailComponent;
use App\Livewire\PagesError500Component;
use App\Livewire\PagesErrorComponent;
use App\Livewire\PagesFaqComponent;
use App\Livewire\PagesInvoiceComponent;
use App\Livewire\PagesLockScreenComponent;
use App\Livewire\PagesMaintenanceComponent;
use App\Livewire\PagesPricingComponent;
use App\Livewire\PagesPricingOneComponent;
use App\Livewire\PagesRecoveryComponent;
use App\Livewire\PagesTimelineComponent;
use App\Livewire\ProfileComponent;
use App\Livewire\ProfileEditComponent;
use App\Livewire\SignInComponent;
use App\Livewire\SignUpComponent;
use App\Livewire\Super\SuperAdminDashboard;
use App\Livewire\TableEditableComponent;
use App\Livewire\TablesBasicComponent;
use App\Livewire\TermsOfServiceComponent;
use App\Livewire\UiAlertsComponent;
use App\Livewire\UiBadgesComponent;
use App\Livewire\UiBreadCrumpComponent;
use App\Livewire\UiButtonsComponent;
use App\Livewire\UiCardsComponent;
use App\Livewire\UiCarouselComponent;
use App\Livewire\UiColorsComponent;
use App\Livewire\UiEmbedVideoComponent;
use App\Livewire\UiGridComponent;
use App\Livewire\UiImagesComponent;
use App\Livewire\UiListGroupComponent;
use App\Livewire\UiMediaObjectComponent;
use App\Livewire\UiModalComponent;
use App\Livewire\UiNotificationsComponent;
use App\Livewire\UiPaginationComponent;
use App\Livewire\UiPopoversComponent;
use App\Livewire\UiProgressbarsComponent;
use App\Livewire\UiTabsComponent;
use App\Livewire\UiTooltipsComponent;
use App\Livewire\UiTypographyComponent;
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
                // case 'sadm':
                //     return redirect()->route('admin.dashboard');
                //     break;
            default:
                // If user type is not recognized, redirect to default dashboard
                abort(403);
                break;
        }
    } else {
        // If user is not authenticated, redirect to login
        return redirect('/login');
    }
})->name('user.dashboard');
// All users Routes

// Buyer Routes

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', HomeComponent::class)->name('buyer.dashboard');
    Route::get('/view/{reference}', BookPdfComponent::class)->name('content.view');
    Route::get('/category/{slug}', CategoryComponent::class)->name('category');
    Route::get('/checkout', CheckoutComponent::class)->name('checkout');
    Route::get('/content/{reference}/{slug}', BookPageComponent::class)->name('content.details');
    Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
    Route::get('/profile-edit', ProfileEditComponent::class)->name('profile.edit');
    Route::get('/acount-setting', AccountSettingComponent::class)->name('account.settings');
    Route::get('/account/dashboard',MyPurchases::class)->name('user.purchases');
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
    Route::get('/add-category', AdminAddCategoryComponent::class)->name('category.add');
    Route::get('/experts', AdminAuthorComponent::class)->name('admin.experts');
    Route::get('/content', AdminBooksComponent::class)->name('admin.content');
    Route::get('/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/users', UserListComponent::class)->name('users');
    Route::get('/tags',ManageTags::class)->name('admin.tags');
    Route::get('/add-tag',AddTag::class)->name('tag.add');
});

// Super Admin Routes
Route::prefix('/super/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthSuperAdmin::class])->group(function () {
    Route::get('dashboard', SuperAdminDashboard::class)->name('super.dashboard');
    Route::get('/blank-page', BlankPageComponent::class);
    Route::get('/pages-timeline', PagesTimelineComponent::class);

    Route::get('/ui-typography', UiTypographyComponent::class);
    Route::get('/ui-tooltips', UiTooltipsComponent::class);
    Route::get('/ui-tabs', UiTabsComponent::class);
    Route::get('/ui-progressbars', UiProgressbarsComponent::class);
    Route::get('/ui-popovers', UiPopoversComponent::class);
    Route::get('/ui-pagination', UiPaginationComponent::class);
    Route::get('/ui-notifications', UiNotificationsComponent::class);
    Route::get('/ui-modal', UiModalComponent::class);
    Route::get('/ui-media', UiMediaObjectComponent::class);
    Route::get('/ui-list-group', UiListGroupComponent::class);
    Route::get('/ui-images', UiImagesComponent::class);
    Route::get('/ui-grid', UiGridComponent::class);
    Route::get('/ui-embed-video', UiEmbedVideoComponent::class);
    Route::get('/ui-colors', UiColorsComponent::class);
    Route::get('/ui-carousel', UiCarouselComponent::class);
    Route::get('/ui-cards', UiCardsComponent::class);
    Route::get('/ui-buttons', UiButtonsComponent::class);
    Route::get('/ui-bread-crump', UiBreadCrumpComponent::class);
    Route::get('/ui-badges', UiBadgesComponent::class);
    Route::get('/ui-alerts', UiAlertsComponent::class);
    Route::get('/terms-of-service', TermsOfServiceComponent::class);
    Route::get('/tables-basic', TablesBasicComponent::class);
    Route::get('/table-editable', TableEditableComponent::class);
    Route::get('/sign-up', SignUpComponent::class);
    Route::get('/sign-in', SignInComponent::class);
    Route::get('/pages-recovery', PagesRecoveryComponent::class);
    Route::get('/pages-pricing', PagesPricingComponent::class);
    Route::get('/pages-pricing-one', PagesPricingOneComponent::class);
    Route::get('/pages-maintenance', PagesMaintenanceComponent::class);
    Route::get('/pages-lock-screen', PagesLockScreenComponent::class);
    Route::get('/pages-invoice', PagesInvoiceComponent::class);
    Route::get('/pages-faq', PagesFaqComponent::class);
    Route::get('/pages-error500', PagesError500Component::class);
    Route::get('/pages-error', PagesErrorComponent::class);
    Route::get('/pages-confirm-mail', PagesConfirmMailComponent::class);
    Route::get('/pages-coming-soon', PagesComingSoonComponent::class);
});

// Dump Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    Route::post('/save-transaction', [SaveTransaction::class, 'saveTransaction'])->name('save.transaction');
});
