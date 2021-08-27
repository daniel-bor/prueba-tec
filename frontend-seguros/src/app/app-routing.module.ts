import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ClientesComponent } from './components/clientes/clientes.component';
import { EditarComponent } from './components/editar/editar.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { NuevoComponent } from './components/nuevo/nuevo.component';
import { PolizasComponent } from './components/polizas/polizas.component';

const routes: Routes = [
  {path:'',redirectTo:'inicio',pathMatch:'full'},
  {path:'inicio', component:InicioComponent},
  {path:'clientes', component:ClientesComponent},
  {path:'polizas', component:PolizasComponent},
  {path:'nuevo', component:NuevoComponent},
  {path:'editar', component:EditarComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const rountingComponents=[InicioComponent,ClientesComponent,PolizasComponent,NuevoComponent,EditarComponent];