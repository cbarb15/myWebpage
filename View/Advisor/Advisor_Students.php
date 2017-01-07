<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/15/16
 * Time: 3:33 PM
 */

                        if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
                                {
                                    $name = $_SESSION["firstName"];
                                    echo"
                                          <li style=\"margin-top: 15px; color: white\">$name, you are logged in</li>
                                          <li style=\"text-align:right\"><a href=\"../Logout.php\" style='color: white'>Logout</a></li>
                                          ";
                                }
                        echo"

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>

            <ol class='breadcrumb'>
                <li><a href='../../index.php'>Home</a> </li>
                <li><a href='index.php'>Advisor Login/Registration</a> </li>
                <li class='active'>Advisor's Students</li>
            </ol>


                <div class='container'>
                    <div class=\"jumbotron\" style='text-align: center'>
                        <h2>Advisor Students</h2>
                    </div>
                </div>

               <div class=\"container\">

                <table class=\"table table-hover table-striped\">
                    <thead>
                      <tr>
                        <th style='text-align: center'>Student</th><th style='text-align: center'>Status</th><th style='text-align: center'>Compliance</th><th style='text-align: center'>Form Completed</th><th style='text-align: center'>Advisor Signiture</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href='../../Controller/Student/Student_Forms.php?name={$connection->student1->FirstName}'>{$connection->student1->FirstName} {$connection->student1->LastName}</a></td><td>Completed</td><td>Good</td><td>Completed</td><td>Completed</td>
                      </tr>
                      <tr>
                        <td><a href='../../Controller/Student/Student_Forms.php?name={$connection->student2->FirstName}'>{$connection->student2->FirstName} {$connection->student2->LastName}</a></td><td>Completed</td><td>Good</td><td>Completed</td><td>Completed</td>
                      </tr>
                      <tr>
                        <td><a href='../../Controller/Student/Student_Forms.php?name={$connection->student3->FirstName}'>{$connection->student3->FirstName} {$connection->student3->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
                      </tr>
                      <tr>
                        <td><a href='../../Controller/Student/Student_Forms.php?name={$connection->student4->FirstName}'>{$connection->student4->FirstName} {$connection->student4->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
                      </tr>
                      <tr>
                        <td><a href='../../Controller/Student/Student_Forms.php?name={$connection->student5->FirstName}'>{$connection->student5->FirstName} {$connection->student5->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <aside class=\"callout\">
                    <div class=\"text-vertical-center\">
                        <img id=\"logo\" src='../../img/ULogo.jpg' width=\"100px\" height=\"100px\">
                    </div>
                </aside>";

include '../../css/Footer.php';
echo"

    </body>
    </html>";