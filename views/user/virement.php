<?php require_once "../views/partials/header.php";

?>

<style>
    @keyframes slideIn {
        from {
            transform: translateY(20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .slide-in {
        animation: slideIn 0.3s ease-out;
    }

    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    .hover-scale {
        transition: transform 0.2s ease-out;
    }

    .hover-scale:hover {
        transform: scale(1.02);
    }
</style>




<div class="flex flex-wrap md:flex-nowrap ">
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
            <a href="/user/virements" class="nav-link flex items-center px-4 py-3 bg-blue-700/50 text-white rounded-lg">
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


    <!-- Enhanced Main Content -->
    <div class="ml-64 flex-1 p-8 fade-in">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Effectuer un virement</h2>
        <!-- Enhanced Transfer Form -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover-scale">
            <form class="space-y-6" id="transferForm" action="/user/virements/send" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Compte à débiter</label>
                        <select id="first" name="first" class="w-full rounded-lg border-gray-200 p-3 transition-colors duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="al">choose Compte à débiter</option>
                            <!-- <input type="text" name="balance1" class="hidden" value="<?php $account["balance"] ?>"> -->
                            <?php foreach ($accounts as $account): ?>
                                <?php
                                if ($account["account_status"] == "actif") {
                                    echo "<option value='" . $account["id"] . "'>";
                                    echo $account["id"] . " (" . $account["account_type"] . " )";
                                    echo "</option>";
                                }
                                ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Bénéficiaire</label>
                        <select name="second" id="second" class="w-full rounded-lg border-gray-200 p-3 transition-colors duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="all2">choose Bénéficiaire</option>
                            <?php foreach ($accounts as $account): ?>
                                <!-- <input type="text" name="balance2" class="hidden" value="<?php $account["balance"] ?>"> -->
                                <?php
                                if ($account["account_status"] == "actif") {
                                    echo "<option value='" . $account["id"] . "'>";
                                    echo $account["id"] . " " . $account["account_type"];
                                    echo "</option>";
                                }
                                ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Montant</label>
                    <div class="relative rounded-lg shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="text-gray-500">€</span>
                        </div>
                        <input
                            type="number"
                            min="0.01"
                            name="montant"
                            step="0.01"
                            class="pl-8 w-full rounded-lg border-gray-200 p-3 transition-colors duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
                            placeholder="0.00" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Motif</label>
                    <input
                        type="text"
                        class="w-full rounded-lg border-gray-200 p-3 transition-colors duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Motif du virement" />
                </div>

                <button type="submit"
                    name="vers"
                    onclick="confirm('are you sure you want to complete this transfere ?!\nEither OK or Cancel.')"
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-500 text-white p-4 rounded-lg transition-all duration-200 hover:from-blue-700 hover:to-blue-600 focus:ring-4 focus:ring-blue-200 transform hover:-translate-y-0.5">
                    Valider le virement
                </button>
            </form>
        </div>

        <!-- Enhanced Recent Transfers -->
        <div class="mt-8 bg-white rounded-xl shadow-lg overflow-hidden hover-scale">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-xl font-semibold text-gray-800">Derniers virements</h3>
            </div>
            <div class="max-w-3xl mx-auto p-4">
                <div class="bg-white rounded-lg shadow divide-y divide-gray-100" id="recentTransfers">
                    <?php foreach ($transfers as $transfer): ?>
                        <div class="p-4 hover:bg-gray-50 transition-colors">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Sender Information -->
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-gray-500">From:</span>
                                        <span class="font-medium">
                                            <?php
                                            $accountCMP = $transfer["account_id"];
                                            foreach ($accounts as $account) {
                                                if ($account["id"] == $accountCMP) {
                                                    $usID = $account["user_id"];
                                                    echo "Account " . $account["account_type"];
                                                }
                                            }
                                            foreach ($users as $user) {
                                                if ($user["id"] == $usID) {
                                                    echo ": " . $user["name"];
                                                }
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <!-- Recipient Information -->
                                    <div class="flex items-center space-x-2">
                                        <span class="text-gray-500">To:</span>
                                        <span class="font-medium">
                                            <?php
                                            $accountCMP = $transfer["beneficiary_account_id"];
                                            foreach ($accounts as $account) {
                                                if ($account["id"] == $accountCMP) {
                                                    $usID = $account["user_id"];
                                                    echo "Account " . $account["account_type"];
                                                }
                                            }
                                            foreach ($users as $user) {
                                                if ($user["id"] == $usID) {
                                                    echo ": " . $user["name"];
                                                }
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Date and Amount -->
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-gray-500">Date:</span>
                                        <span class="font-medium"><?= $transfer["created_at"] ?></span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-gray-500">Amount:</span>
                                        <span class="font-medium text-green-600">$<?= number_format($transfer["amount"], 2) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <script>
            let send = document.getElementById('first');
            let rcv = document.getElementById('second');

            send.addEventListener("change", function() {
                for (let option of rcv.options) {
                    if (option.value === send.value) {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }
            });

            rcv.addEventListener("change", function() {
                for (let option of send.options) {
                    if (option.value === rcv.value) {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }
            });
        </script>


        <?php require_once "../views/partials/footer.php" ?>