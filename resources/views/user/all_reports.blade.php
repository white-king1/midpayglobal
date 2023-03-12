@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">ALL REPORTS TABLE</h3>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Reports Table</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Balance</th>
                      <th>Date Registered</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kelechi Ndubuisi</td>
                      <td>kelechivictorn@gmail.com</td>
                      <td>09065729839</td>
                      <td>N3200</td>
                      <td>2012/08/03</td>
                      <td>
                        <label class="badge badge-info">Restrict</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-danger">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
