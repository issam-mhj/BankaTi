<?php require_once "../views/partials/header.php";

?>
<div class="flex flex-wrap md:flex-nowrap h-screen">
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
    <!-- Main Content -->
    <div class="ml-64 flex-1 p-8 space-y-6 bg-gray-50 overflow-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Dépôt d'argent</h2>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Déposer de l'argent</h3>
                    <p class="text-sm text-gray-500 mt-1">
                        Veuillez saisir le montant que vous souhaitez déposer sur votre compte
                    </p>
                </div>
                <form id="addFundsForm" action="/user/myAccounts/depots/send" method="post" class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <input type="text" name="id" value="<?= $compteID ?>" class="hidden">
                            <label for="amount" class="block text-sm font-medium text-gray-700">Montant à déposer</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">€</span>
                                </div>
                                <input name="money" type="number" id="amount" class="block w-full pl-7 pr-12 py-3 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="0.00" required min="0.01" step="0.01" />
                            </div>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Motif du dépôt (optionnel)</label>
                            <textarea id="description" rows="3" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Ajoutez une note pour ce dépôt"></textarea>
                        </div>
                    </div>

                    <div class="bg-gray-50 -mx-6 -mb-6 px-6 py-4">
                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="window.history.back()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Annuler
                            </button>
                            <button type="submit" name="depot" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Confirmer le dépôt
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require_once "../views/partials/footer.php" ?>