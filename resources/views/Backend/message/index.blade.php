@extends('Backend.layouts.app')
@section('body')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Message</li>
        </ul>
    </div>
</section>

<section class="section main-section">
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Messages
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                    <td >{{$message->name}}</td>
                    <td >{{$message->email}}</td>
                    <td >{{$message->subject}}</td>
                    <td class="actions-cell">
                        <div class="buttons right nowrap">
                            <button class="button small green --jb-modal" data-target="sample-modal-2" data-id="{{ $message->id }}" type="button">
                                <span class="icon"><i class="mdi mdi-eye"></i></span>
                            </button>
                            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resume?');">
                                @csrf
                                @method('DELETE')
                                <button class="button small red --jb-modal" type="submit">
                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<div id="sample-modal-2" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Message Details</p>
        </header>
        <section class="modal-card-body">
            <p><strong>Name:</strong> <span id="modal-name"></span></p>
            <p><strong>Email:</strong> <span id="modal-email"></span></p>
            <p><strong>Subject:</strong> <span id="modal-subject"></span></p>
            <p><strong>Message:</strong>
                <span id="modal-message"></span>
            </p>
        </section>
        <footer class="modal-card-foot">
            <button class="button --jb-modal-close">Cancel</button>
            <button class="button blue --jb-modal-close">Confirm</button>
        </footer>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('sample-modal-2');
        const modalName = document.getElementById('modal-name');
        const modalEmail = document.getElementById('modal-email');
        const modalSubject = document.getElementById('modal-subject');
        const modalMessage = document.getElementById('modal-message');


        document.querySelectorAll('.button.small.green').forEach(button => {
            button.addEventListener('click', function() {
                const messageId = this.getAttribute('data-id');

                // Fetch message details using AJAX or similar method
                fetch(`/messages/${messageId}`)
                    .then(response => response.json())
                    .then(data => {
                        modalName.textContent = data.name;
                        modalEmail.textContent = data.email;
                        modalSubject.textContent = data.subject;
                        modalMessage.textContent = data.message;
                        modal.classList.add('is-active');
                    })
                    .catch(error => console.error('Error fetching message details:', error));
            });
        });

        document.querySelectorAll('.--jb-modal-close').forEach(button => {
            button.addEventListener('click', function() {
                modal.classList.remove('is-active');
            });
        });
    });
</script>

@endsection
