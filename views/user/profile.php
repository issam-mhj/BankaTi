<?php require_once "../views/partials/header.php";

// var_dump($_GET);
?>


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
            <a href="/user/profile" class="nav-link flex items-center px-4 py-3 bg-blue-700/50 text-white rounded-lg">
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
    <div class="flex-1 p-8 ml-96">
        <h2 class="text-3xl font-bold ml-72 text-gray-800">Mon Profil</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            <!-- Informations Personnelles -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Informations Personnelles</h3>
                        <form class="space-y-6" action="profile/modifyprofile" method="post">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Numéro client</label>
                                    <input
                                        type="text"
                                        readonly
                                        value="<?= $user["id"] . $user["name"][0] . $user["name"][1] ?>"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Nom</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                        value="<?= $user["name"] ?>" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">phone</label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                        value="<?= $user["phone"] ?>" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                        value="<?= $user["address"] ?>" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                        value="<?= $user["email"] ?>" />
                                </div>
                            </div>
                            <div class="flex justify-end pt-4">
                                <button type="submit" name="info" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                    Sauvegarder les modifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sécurité -->
                <div class="bg-white rounded-lg shadow mt-6">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Sécurité</h3>
                        <form class="space-y-6" action="profile/profilePSW" method="post">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Mot de passe actuel</label>
                                <input
                                    type="password"
                                    name="psw1"
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                    placeholder="••••••••" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
                                <input
                                    type="password"
                                    name="psw2"
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                    placeholder="••••••••" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Confirmer le nouveau mot de passe</label>
                                <input
                                    type="password"
                                    name="psw3"
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2"
                                    placeholder="••••••••" />
                            </div>

                            <div class="flex justify-end pt-4">
                                <button type="submit" name="psw" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                    Modifier le mot de passe
                                </button>
                            </div>
                            <div class="">
                                <?php if (isset($_GET["wrong_password"])) {
                                    echo "
                                    <div style='
                                        color: #fff;
                                        background-color: #e74c3c;
                                        border: 1px solid #c0392b;
                                        border-radius: 5px;
                                        padding: 10px 15px;
                                        margin: 10px 0;
                                        font-family: Arial, sans-serif;
                                        font-size: 14px;
                                        text-align: center;
                                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                    '>
                                        <strong>Error:</strong> The password you entered is incorrect. Please try again.
                                    </div>";
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
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