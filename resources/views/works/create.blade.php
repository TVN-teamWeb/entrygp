@extends('main')
@section('content')

<div class="container">
  <h2>REGISTER A NEW </h2>
  <h5 style="margin-bottom:30px; font-size:1.1em;">IF YOU ARE SHORTLISTED OR A WINNER, THE CREDITS WILL BE PUBLISHED EXACTLY AS YOU HAVE TYPED THEM ON THESE ENTRY FORM AND ON THE CASE HISTORY. PLEASE CAREFULLY CHECK THEM.</h5>
  <form>
    <input type="hidden" name="agencyList">

    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <div class="form-group">
          <label for="titlentry" class="title">Title of entry</label>
          <input type="text" class="form-control" id="entrytitle" >
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
      </div>
      <div class="col-sm-12 col-lg-4">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="titlentry" class="title">Category</label>
      </div>
    </div>

    <!-- List checked -->
    <div class="row">
      @foreach($res as $padre=>$figli)
      <div class="col-sm-12 col-lg-4">
        <label for="{{ $padre }}" class="padre-check">  {{ $padre }} </label>
        <ul>
          @foreach ($figli as $nome)
          <li>
            <input class="form-check-input" type="checkbox" id="{{ $nome }}" value="{{ $nome }}">
            {{ $nome }}
          </li>
          @endforeach
        </ul>
      </div>
      @endforeach
    </div>

    <!-- form AGENCY / GRAPHIC AGENCY -->
    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  AGENCY / GRAPHIC AGENCY
          <span data-toggle="modal" data-target="#agency" id="openAgency" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          </span>
        </label>
        <div id="agencyItems">
        </div>
      </div>
    </div>


    <!-- form COMPANY/CLIENT -->
    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  COMPANY/CLIENT
          <span data-toggle="modal" data-target="#client" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          <!-- i class="fa fa-plus" aria-hidden="true"></i -->
        </span>
        </label>
          <div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">COMPANY/CLIENT</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12" style="margin-bottom:30px;">
                          <button type="button" class="btn btn-info">fill in with my data</button>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>ENTRANT COMPANY NAME*</label>
                          <input type="text" class="form-control" id="company-name">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>BRAND*</label>
                          <input type="text" class="form-control" id="company-brand">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>ADDRESS*</label>
                          <input type="text" class="form-control" id="company-address">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>CITY*</label>
                          <input type="text" class="form-control" id="company-city">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>COUNTRY*</label>
                          <input type="text" class="form-control" id="company-name">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>POST CODE*</label>
                          <input type="text" class="form-control" id="company-postcode">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>TELEPHONE*</label>
                          <input type="text" class="form-control" id="company-telephone">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ADD</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>


    <!-- form PRODUCTION COMPANY -->
    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  PRODUCTION COMPANY
          <span data-toggle="modal" data-target="#production" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          <!-- i class="fa fa-plus" aria-hidden="true"></i -->
        </span>
        </label>
          <div class="modal fade" id="production" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">PRODUCTION COMPANY</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12" style="margin-bottom:30px;">
                          <button type="button" class="btn btn-info">fill in with my data</button>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>ENTRANT COMPANY NAME*</label>
                          <input type="text" class="form-control" id="production-name">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>ADDRESS*</label>
                          <input type="text" class="form-control" id="production-address">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>CITY*</label>
                          <input type="text" class="form-control" id="production-city">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>COUNTRY*</label>
                          <input type="text" class="form-control" id="production-name">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>POST CODE*</label>
                          <input type="text" class="form-control" id="production-postcode">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>TELEPHONE*</label>
                          <input type="text" class="form-control" id="production-telephone">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ADD</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>


    <!-- form AGENCY CREDITS -->
    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  AGENCY CREDITS
          <span data-toggle="modal" data-target="#agencycredits" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          <!-- i class="fa fa-plus" aria-hidden="true"></i -->
        </span>
        </label>
          <div class="modal fade" id="agencycredits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">AGENCY CREDITS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12" style="margin-bottom:30px;">
                          <button type="button" class="btn btn-info">fill in with my data</button>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>FIRST NAME*</label>
                          <input type="text" class="form-control" id="agency-firstname">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1">
                              <option>Creative manager</option>
                              <option>Account</option>
                              <option>Other</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>LAST NAME*</label>
                          <input type="text" class="form-control" id="agency-lastname">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>CITY*</label>
                          <input type="text" class="form-control" id="agency-city">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>JOB TITLE*</label>
                          <input type="text" class="form-control" id="agency-jobtitle">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>E-MAIL*</label>
                          <input type="text" class="form-control" id="agency-email">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ADD</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>


    <!-- form COMPANY/CLIENT CREDITS -->
    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  COMPANY/CLIENT CREDITS
          <span data-toggle="modal" data-target="#company-credits" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          <!-- i class="fa fa-plus" aria-hidden="true"></i -->
        </span>
        </label>
          <div class="modal fade" id="company-credits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">COMPANY/CLIENT CREDITS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12" style="margin-bottom:30px;">
                          <button type="button" class="btn btn-info">fill in with my data</button>
                          <h5 style="margin-top:30px;">MARKETING MANAGERS</h5>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>FIRST NAME*</label>
                          <input type="text" class="form-control" id="credits-firstname">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>LAST NAME*</label>
                          <input type="text" class="form-control" id="credits-lastname">
                        </div>

                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>JOB TITLE*</label>
                          <input type="text" class="form-control" id="credits-jobtitle">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>E-MAIL*</label>
                          <input type="text" class="form-control" id="credits-email">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ADD</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- form STUDIO CREDITS -->

    <div class="row">
      <div class="col-sm-12">
        <label for="agency" class="title">  STUDIO CREDITS
          <span data-toggle="modal" data-target="#studio-credits" data-whatever="@getbootstrap">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
          <!-- i class="fa fa-plus" aria-hidden="true"></i -->
        </span>
        </label>
          <div class="modal fade" id="studio-credits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">STUDIO CREDITS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12" style="margin-bottom:30px;">
                          <button type="button" class="btn btn-info">fill in with my data</button>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>FIRST NAME*</label>
                          <input type="text" class="form-control" id="agency-firstname">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="sel1">DEPARTMENT</label>
                            <select class="form-control" id="sel1">
                              <option>Production</option>
                              <option>Direction</option>
                              <option>Other</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>LAST NAME*</label>
                          <input type="text" class="form-control" id="studio-lastname">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>CITY*</label>
                          <input type="text" class="form-control" id="studio-city">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>JOB TITLE*</label>
                          <input type="text" class="form-control" id="studio-jobtitle">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                          <label for="recipient-name" class="form-control-label" required>E-MAIL*</label>
                          <input type="text" class="form-control" id="studio-email">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ADD</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>









<!-- Rules and Regulations -->
<div class="row">
  <div class="col-sm-12">
    <input class="form-check-input" type="checkbox" id="rules" value="rules">
    I read and accept the <b data-toggle="modal" data-target="#dialog-rules" class="title" >Rules and Regulations</b>

    <div class="modal fade" id="dialog-rules" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">RULES AND REGULATIONS</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>ELIGIBILITY</h5>
            <p>
              <b>Entry deadline: 20 March, 2013.</b>All entry forms and payments must be received no later than this date.
All projects submitted must be designed for implementation and must have been implemented for the first time between March 1, 2012 and March 30, 2013.
The GrandPrix is open to all parties involved in the use of communications, such as digital agencies, advertising agencies, production companies, advertisers, etc.
All submitted projects must be registered under the relative categories (see “categories” list).
It is the responsibility of the entrant to ensure that the commissioning client has the rights to use the intellectual property of the brand advertised/promoted.
In the case of a query by the Jury, the entrant will be required to provide documentary evidence to prove eligibility of entry.
If you are shortlisted or a winner, the credits will be published exactly as you have typed them on the online entry form and on the case history. Please carefully check them.
Organizers are not to be held responsible against third parties.
            </p>
            <h5>JUDGING</h5>
            <p>
              The decision of the Jury in all matters relating to the awarding of prizes will be final and binding. The Jury will be allowed to move entries to more appropriate categories if necessary.
              The Jury reserves the right not to indicate a winner for one or more categories, should the jurors not consider worthy the projects submitted and, at the same time, reserves the right to give one or more awards within the same category.
              The Jury will evaluate entries anonymously. You must not refer to the name of your agency or any contributing design or creative companies on the case history and on the illustrative material.
            </p>
            <h5>AWARDS</h5>
            <p>
              Duplicate trophies can be purchased by other participating parties after the GrandPrix’s ceremony is being held.
              In the event of a win, any duties, fees and charges accrued from the transporting of the trophy, will be covered by the entrant company, not the Organizers.
            </p>

            <h4>TREATMENT AND PUBLICATION OF ENTRIES</h4>
            <p>
              In order to promote the GrandPrix, each entrant grants to the Organizers a non-exclusive royalty free right and license to:
              <ul>
                <li style="font-style:italic;">screen or publish all materials/projects submitted to the Organizers, with or without charge at public or private presentations, with a view to promoting the GrandPrix either directly or indirectly.</li>
                <li style="font-style:italic;">reproduce all materials/projects submitted to the Organizers in the GrandPrix’s Archive whether online or offline.</li>
              </ul>
            </p>
            <div class="modal-footer">
              <p data-dismiss="modal" style="cursor:pointer;"><b>Close</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="col-sm-12">
    <input class="form-check-input" type="checkbox" id="privacy" value="privacy" data-target="#privacy">
    I carefully read the informative on the <b data-toggle="modal" data-target="#dialog-privacy" class="title" >Privacy</b> and I give my consent to the handling of my sensitive data


    <div class="modal fade" id="dialog-privacy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">PRIVACY</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
According to Art. No. 13 of the Legislative Decree No. 196/2003 your data will be handled – even virtually – following no particular processing criteria, by TVN srl in order to process your request of submission to the competition and related activities. Personal data and invoicing details are therefore mandatory for the purpose, all other data are not mandatory and does not affect the right to the processing of the request. Your personal data could be handled by third parties involved in reaching the same goal, such as banks or autonomous persons, bound to present a specific informative paper, as required by Art. 13 of Legislative Decree 196/200. Upon consent, data can also be used for commercial purposes, via fax or e-mail. The categories of subjects appointed for data processing are the people in charge of data processing, administration, and the setting of e-mail messages and call centers. According to Art. No. 7 of the Legislative Decree it will be possible to view, edit, update or cancel your data, just by writing to the afore-mentioned address. I give my consent to receive informative material on other services and products of our company.
            </p>

            <div class="modal-footer">
              <p data-dismiss="modal" style="cursor:pointer;"><b>Close</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
    <button type="submit" class="btn btn-primary">Add entry</button>
  </form>

</div><!-- End container -->



<!-- Include Modal -->

@include('modaladdworks/modalAddWorks')







@endsection
