<?php require_once "../views/partials/header.php";

?>



<div class="flex min-h-screen">
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
            <a href="/user/myAccounts" class="nav-link flex items-center px-4 py-3 text-gray-100 rounded-lg hover:bg-blue-700/50 transition-all duration-200">
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
            <a href="/user/historique" class="nav-link flex items-center px-4 py-3 bg-blue-700/50 text-white rounded-lg">
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
    <div class="flex-1 ml-64">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <h1 class="text-3xl font-bold text-gray-900">Historique des transactions</h1>
                    <a href="/user/virements" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                        Nouvelle transaction
                    </a>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Résumé Cards with Animation -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow animate__animated animate__fadeInUp">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total des entrées</p>
                            <p class="text-2xl font-bold text-green-600 mt-1">+ <?= $totalDepot[0]["total"] ?>€</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <i data-lucide="arrow-down-right" class="w-6 h-6 text-green-600"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <canvas id="incomingChart" height="60"></canvas>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total des sorties</p>
                            <p class="text-2xl font-bold text-red-600 mt-1">- <?= $totalRetraits[0]["total"] ?>€</p>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <i data-lucide="arrow-up-right" class="w-6 h-6 text-red-600"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <canvas id="outgoingChart" height="60"></canvas>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Solde de la période</p>
                            <p class="text-2xl font-bold text-blue-600 mt-1">+<?= $difference ?>€</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i data-lucide="wallet" class="w-6 h-6 text-blue-600"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <canvas id="balanceChart" height="60"></canvas>
                    </div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="bg-white rounded-xl shadow-sm mb-8 border border-gray-100 animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Filtres</h3>
                        <button class="text-sm text-gray-500 hover:text-gray-700" id="toggleFilters">
                            <i data-lucide="sliders" class="w-5 h-5"></i>
                        </button>
                    </div>

                    <div id="filterContent" class="">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Compte</label>
                                <select id="comptes" class="w-full rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                    <option>Tous les comptes</option>
                                    <option>Compte Courant</option>
                                    <option>Compte Épargne</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Période</label>
                                <select class="w-full rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                    <option>all</option>
                                    <option>30 derniers jours</option>
                                    <option>3 derniers mois</option>
                                    <option>12 derniers mois</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                                <select class="w-full rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                    <option>Toutes les opérations</option>
                                    <option>dépôts uniquement</option>
                                    <option>retraits uniquement</option>
                                    <option>transferts uniquement</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Montant</label>
                                <div class="flex space-x-4">
                                    <input type="number" placeholder="Min" class="w-1/2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                    <input type="number" placeholder="Max" class="w-1/2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6 space-x-4">
                            <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                                Réinitialiser
                            </button>
                            <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                                Appliquer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions Table -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 animate__animated animate__fadeIn" style="animation-delay: 0.4s;">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Transactions </h3>
                        <button class="flex items-center text-sm text-blue-600 hover:text-blue-700">
                            <i data-lucide="download" class="w-4 h-4 mr-2"></i>
                            Exporter
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Compte</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">beneficiary_account</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="myTable">
                                <?php foreach ($transactions as $transaction): ?>

                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $transaction["created_at"] ?></td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900"><?php
                                                                                $accountCMP = $transaction["account_id"];
                                                                                foreach ($accounts as $account) {
                                                                                    if ($account["id"] == $accountCMP) {
                                                                                        $usID = $account["user_id"];
                                                                                        echo  $account["account_type"];
                                                                                    }
                                                                                }
                                                                                foreach ($users as $user) {
                                                                                    if ($user["id"] == $usID) {
                                                                                        echo ": " . $user["name"];
                                                                                    }
                                                                                }
                                                                                ?></div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php
                                            if ($transaction["transaction_type"] == "transfert") {
                                                echo "<span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800'>" . $transaction["transaction_type"] . "</span>";
                                            } else if ($transaction["transaction_type"] == "depot") {
                                                echo "<span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800'>" . $transaction["transaction_type"] . "</span>";
                                            } else {
                                                echo "<span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800'>" . $transaction["transaction_type"] . "</span>";
                                            }
                                            ?>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900"><?php
                                                                                    if ($transaction["transaction_type"] == "transfert") {

                                                                                        $accountCMP = $transaction["beneficiary_account_id"];
                                                                                        foreach ($accounts as $account) {
                                                                                            if ($account["id"] == $accountCMP) {
                                                                                                $usID = $account["user_id"];
                                                                                                echo  $account["account_type"];
                                                                                            }
                                                                                        }
                                                                                        foreach ($users as $user) {
                                                                                            if ($user["id"] == $usID) {
                                                                                                echo ": " . $user["name"];
                                                                                            }
                                                                                        }
                                                                                    } else {
                                                                                        echo "_";
                                                                                    }
                                                                                    ?></td>
                                        <?php
                                        if ($transaction["transaction_type"] == "transfert") {
                                            echo " <td class='px-6 py-4 text-sm font-medium text-right text-yellow-600'>" . $transaction["amount"] . " €</td>";
                                        } else if ($transaction["transaction_type"] == "depot") {
                                            echo " <td class='px-6 py-4 text-sm font-medium text-right text-green-600'>+" . $transaction["amount"] . " €</td>";
                                        } else {
                                            echo " <td class='px-6 py-4 text-sm font-medium text-right text-red-600'>-" . $transaction["amount"] . " €</td>";
                                        }
                                        ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Toggle filters
        const toggleFilters = document.getElementById('toggleFilters');
        const filterContent = document.getElementById('filterContent');

        toggleFilters.addEventListener('click', () => {
            filterContent.classList.toggle('hidden');
            toggleFilters.querySelector('i').classList.toggle('rotate-180');
        });
    </script>

    <?php require_once "../views/partials/footer.php" ?>