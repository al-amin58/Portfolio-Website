@extends('Backend.layouts.app')
@section('body')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Dashboard</li>
        </ul>
    </div>
</section>

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Visitors
                        </h3>
                        <h1>
                            {{ $count }}
                        </h1>
                    </div>
                    <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
            </div>
        </div>
    </div>



    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Clients
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>City</th>
                    <th>Progress</th>
                    <th>Created</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="image-cell">
                        <div class="image">
                            <img src="https://avatars.dicebear.com/v2/initials/jonathon-hahn.svg" class="rounded-full">
                        </div>
                    </td>
                    <td data-label="Name">Jonathon Hahn</td>
                    <td data-label="Company">Flatley Ltd</td>
                    <td data-label="City">Billiemouth</td>
                    <td data-label="Progress" class="progress-cell">
                        <progress max="100" value="74">74</progress>
                    </td>
                    <td data-label="Created">
                        <small class="text-gray-500" title="Dec 30, 2021">Dec 30, 2021</small>
                    </td>
                    <td class="actions-cell">
                        <div class="buttons right nowrap">

                            <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="image-cell">
                        <div class="image">
                            <img src="https://avatars.dicebear.com/v2/initials/ryley-wuckert.svg" class="rounded-full">
                        </div>
                    </td>
                    <td data-label="Name">Ryley Wuckert</td>
                    <td data-label="Company">Heller-Little</td>
                    <td data-label="City">Emeraldtown</td>
                    <td data-label="Progress" class="progress-cell">
                        <progress max="100" value="54">54</progress>
                    </td>
                    <td data-label="Created">
                        <small class="text-gray-500" title="Jun 28, 2021">Jun 28, 2021</small>
                    </td>
                    <td class="actions-cell">
                        <div class="buttons right nowrap">

                            <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="image-cell">
                        <div class="image">
                            <img src="https://avatars.dicebear.com/v2/initials/sienna-hayes.svg" class="rounded-full">
                        </div>
                    </td>
                    <td data-label="Name">Sienna Hayes</td>
                    <td data-label="Company">Conn, Jerde and Douglas</td>
                    <td data-label="City">Jonathanfort</td>
                    <td data-label="Progress" class="progress-cell">
                        <progress max="100" value="55">55</progress>
                    </td>
                    <td data-label="Created">
                        <small class="text-gray-500" title="Mar 7, 2021">Mar 7, 2021</small>
                    </td>
                    <td class="actions-cell">
                        <div class="buttons right nowrap">

                            <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        <button type="button" class="button active">1</button>
                        <button type="button" class="button">2</button>
                        <button type="button" class="button">3</button>
                    </div>
                    <small>Page 1 of 3</small>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
