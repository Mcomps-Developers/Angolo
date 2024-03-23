<?php

use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthBuyer;
use App\Http\Middleware\AuthSeller;
use App\Http\Middleware\AuthSuperAdmin;
use App\Livewire\AccountSettingComponent;
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
                // case 'slr':
                //     return redirect()->route('parent.dashboard');
                //     break;
                // case 'adm':
                //     return redirect()->route('learner.dashboard');
                //     break;
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
// Buyer Routes
Route::prefix('/user')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', HomeComponent::class)->name('buyer.dashboard');
    Route::get('/book-pdf', BookPdfComponent::class);
    Route::get('/category', CategoryComponent::class);
    Route::get('/checkout', CheckoutComponent::class);
    Route::get('/book-page', BookPageComponent::class)->name('book.page');
    Route::get('/wishlist', WishlistComponent::class);
    Route::get('/profile', ProfileComponent::class);
});

// Seller Routes
Route::prefix('/creator')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthSeller::class])->group(function () {
});

// Admin Routes
Route::prefix('/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthAdmin::class])->group(function () {
    Route::get('/acount-setting', AccountSettingComponent::class);
    Route::get('/add-user', AdminAddUserComponent::class);
    Route::get('/admin-add-user', AdminAddUserComponent::class);
    Route::get('/admin-add-author', AdminAddAuthorComponent::class);
    Route::get('/admin-add-book', AdminAddBookComponent::class);
    Route::get('/admin-add-category', AdminAddCategoryComponent::class);
    Route::get('/admin-author', AdminAuthorComponent::class);
    Route::get('/admin-books', AdminBooksComponent::class);
    Route::get('/admin-category', AdminCategoryComponent::class);
    Route::get('/admin-dashboard', AdminDashboardComponent::class);
});

// Super Admin Routes
Route::prefix('/super/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', AuthSuperAdmin::class])->group(function () {

    Route::get('/blank-page', BlankPageComponent::class);
    Route::get('/pages-timeline', PagesTimelineComponent::class);
    Route::get('/user-list', UserListComponent::class);
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
    Route::get('/profile-edit', ProfileEditComponent::class);
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
