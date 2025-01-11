<?php require_once "../views/partials/header.php";

?>


<style>
    /* Custom animations */
    @keyframes slideIn {
        from {
            transform: translateX(-20px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .animate-slide-in {
        animation: slideIn 0.3s ease-out forwards;
    }

    /* Hover effect for cards */
    .account-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .account-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>


<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 md:w-1/6 bg-gradient-to-br from-blue-900 to-blue-800 text-white shadow-xl" id="sidebar">
        <div class="p-6">
            <h1 class="text-3xl font-bold tracking-tight animate-fade-in">BANKATI</h1>
        </div>
        <nav class="mt-8 space-y-2 px-4">
            <a href="/user/dashboard" class="nav-link flex items-center px-4 py-3 text-gray-100 rounded-lg hover:bg-blue-700/50 transition-all duration-200">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <span class="font-medium ml-2">Tableau de bord</span>
            </a>
            <a href="/user/myAccounts" class="nav-link flex items-center px-4 py-3 bg-blue-700/50 text-white rounded-lg">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="font-medium ml-2">Mes comptes</span>
            </a>
            <a href="/user/virements" class="nav-link flex items-center px-4 py-3 text-gray-100 rounded-lg hover:bg-blue-700/50 transition-all duration-200">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
                <span class="font-medium ml-2">Virements</span>
            </a>
            <a href="/user/historique" class="nav-link flex items-center px-4 py-3 text-gray-100 rounded-lg hover:bg-blue-700/50 transition-all duration-200">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <span class="font-medium ml-2">Historique</span>
            </a>
            <a href="/user/profile" class="nav-link flex items-center px-4 py-3 text-gray-100 rounded-lg hover:bg-blue-700/50 transition-all duration-200">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 12c2.28 0 4-1.72 4-4s-1.72-4-4-4-4 1.72-4 4 1.72 4 4 4zm0 2c-3.31 0-6 2.69-6 6h12c0-3.31-2.69-6-6-6z" />
                </svg>
                <span class="font-medium ml-2">Profil</span>
            </a>
        </nav>

        <!-- User Profile Section -->
        <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-blue-800">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-full bg-blue-700/50 flex items-center justify-center">
                    <?php foreach ($users as $user) {
                        echo $user["name"][0] . $user["name"][2];
                    } ?>
                </div>
                <div>
                    <?php foreach ($users as $user): ?>
                        <p class="font-medium text-white"><?= $user["name"] ?></p>
                        <p class="text-sm text-blue-200">Client </p>
                    <?php endforeach ?>
                </div>
            </div>
            <a href="/user/logout" onclick="confirm('are you sure you want to logout ')" class="flex text-xl items-center px-4 py-2 font-extrabold text-red-500 rounded-lg bg-red-100 transition-all duration-200">
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="font-medium ml-2">Déconnexion</span>
            </a>
        </div>
    </div>

    <!-- Main Content with enhanced styling -->
    <div class="ml-64 flex-1 p-8 space-y-6">
        <h2 class="text-3xl font-bold text-gray-800 animate-slide-in">
            Mes Comptes
        </h2>

        <!-- Account Cards with enhanced styling -->
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Current Account -->
            <?php foreach ($accounts as $account): ?>
                <div class="account-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="p-6 space-y-6">
                        <div class="flex justify-between items-center">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">Compte <?= $account["account_type"] ?></h3>
                                <p class="text-sm text-gray-500 font-mono">FR76 1234 5678 9012</p>
                            </div>
                            <div class="text-right">
                                <p class="text-3xl font-bold text-gray-900">€<?= $account["balance"] ?></p>
                                <?php
                                if ($account["account_status"] == "actif") {
                                    echo
                                    '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 animate-pulse">
                                        Actif
                                    </span>';
                                } else if ($account["account_status"] == "inactif") {
                                    echo
                                    '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                    Inactif
                                    </span>';
                                } else if ($account["account_status"] == "en attente") {
                                    echo
                                    '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 animate-bounce">
                                    En Attente
                                    </span>
                                    ';
                                } else if ($account["account_status"] == "bloqué") {
                                    echo
                                    '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                    Bloqué
                                    </span>
                                    ';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <?php
                            if ($account["account_status"] != "actif") {
                                echo '<a href="/user/myAccounts/depots?id=' . $account['id'] . '" class="group hidden flex items-center justify-center p-3 text-blue-600 border border-blue-600 rounded-lg transition-all duration-200 hover:bg-blue-600 hover:text-white">';
                            } else {
                                echo '<a href="/user/myAccounts/depots?id=' . $account['id'] . '" class="group flex items-center justify-center p-3 text-blue-600 border border-blue-600 rounded-lg transition-all duration-200 hover:bg-blue-600 hover:text-white">';
                            }

                            ?>
                            <i data-lucide="plus-circle" class="w-5 h-5 mr-2 transition-transform duration-200 group-hover:rotate-90"></i>
                            Alimenter
                            </a>
                            <?php
                            if ($account["account_status"] != "actif") {
                                echo '<a href="/user/myAccounts/retrait?id=' . $account['id'] . '" class="group hidden flex items-center justify-center p-3 text-purple-600 border border-purple-600 rounded-lg transition-all duration-200 hover:bg-purple-600 hover:text-white">';
                            } else if ($account["account_status"] == "actif" && $account["account_type"] == "courant") {
                                echo '<a href="/user/myAccounts/retrait?id=' . $account['id'] . '" class="group flex items-center justify-center p-3 text-purple-600 border border-purple-600 rounded-lg transition-all duration-200 hover:bg-purple-600 hover:text-white">';
                            } else {
                                echo '<a href="/user/myAccounts/retrait?id=' . $account['id'] . '" class="group hidden flex items-center justify-center p-3 text-purple-600 border border-purple-600 rounded-lg transition-all duration-200 hover:bg-purple-600 hover:text-white">';
                            }

                            ?>
                            <i data-lucide="download" class="w-5 h-5 mr-2 transition-transform duration-200 group-hover:translate-y-1"></i>
                            Relevé
                            </a>
                        </div>

                        <!-- Account details with hover effect -->
                        <div class="pt-6 border-t border-gray-100">
                            <h4 class="font-medium text-gray-700 mb-4">Détails du compte</h4>
                            <dl class="grid grid-cols-2 gap-4">
                                <!-- Detail items with hover effect -->
                                <div class="p-3 rounded-lg transition-colors duration-200 hover:bg-gray-50">
                                    <dt class="text-sm text-gray-500">Date d'ouverture</dt>
                                    <dd class="mt-1 text-sm font-medium text-gray-900"><?= $account["created_at"] ?></dd>
                                </div>
                                <!-- Add similar styling to other detail items -->
                            </dl>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- Savings Account - Similar styling -->
        </div>
    </div>
</div>

<!-- Modal with enhanced animations -->
<div id="alimenterCompteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm transition-opacity duration-300">
    <div class="relative top-20 mx-auto p-5 w-full max-w-md transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
        <div class="bg-white rounded-xl shadow-xl">
            <!-- Modal content with similar enhanced styling -->
        </div>
    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();

        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        let isSidebarVisible = true;

        toggleButton.addEventListener('click', () => {
            isSidebarVisible = !isSidebarVisible;
            if (isSidebarVisible) {
                sidebar.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) { // md breakpoint
                sidebar.classList.remove('hidden');
                isSidebarVisible = true;
            }
        });
    });
</script>


<?php require_once "../views/partials/footer.php" ?>