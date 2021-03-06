import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule }     from './app-routing.module';

import { AppComponent }         from './app.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { DashboardService } from './providers/dashboard.service';
import { AboutusComponent } from './components/aboutus/aboutus.component';
import { RegisterComponent } from './auth/register/register.component';


@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    AppRoutingModule
  ],
  declarations: [
    AppComponent,
    DashboardComponent,
    AboutusComponent,
    RegisterComponent
  ],
  providers: [ 
    DashboardService
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule { }

/*
Copyright 2017 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/