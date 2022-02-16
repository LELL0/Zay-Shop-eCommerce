<?php
                        require_once("connection/conn.php");
                        date_default_timezone_set("Asia/Beirut");
                        if(isset($_POST["submit"])){
                            $username = trim($_POST["user_name"]);
                            $email = trim($_POST["user_email"]);
                            $age = $_POST["user_age"];
                            $biography = trim($_POST["user_bio"]);
                            $job = $_POST["user_job"];
                            $interests1 = $_POST["user_interest"];
                            $interests="";
                            foreach($interests1 as $int)
                            {  
                                $interests .= $int.",";
                            }       
                            $interests = substr($interests, 0, -1);
                            
                            $userCheck = mysqli_query($con,"Select userEmail from jobApply WHERE userEmail='$email'");
                            if(mysqli_num_rows($userCheck) == true){
                                header("Location:job.php?error=1");
                            } else {
                            // --------------------- File upload ------------------------
                            // Array containing allowed extensions
                            $allowedExts = array("jpg", "jpeg", "gif", "png", "swf", "mp3", "txt", "pdf", "doc", "docx","jfif");
                            // Array containing allowed types linked to the extensions in the previous array
                            $allowedTypes = array("image/jpeg", "image/jpeg", "image/jfif" ,"image/gif", "image/png", "application/x-shockwave-flash", "audio/mpeg", "text/plain","application/pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                            
                            //Extract the file extension
                            $array = explode(".", $_FILES["user_photo"]["name"]);
                            $extension = end($array);
                            $extensionCheck = array_search(mime_content_type($_FILES["user_photo"]["tmp_name"]), $allowedTypes) == array_search(strtolower($extension), $allowedExts);
                            
                            //Restriction for accepting the attachment

                                //Check for file errors
                              if ($_FILES["user_photo"]["error"] > 0)
                                {
                                //$_FILES["user_photo"]["error"]
                                header("Location:job.php?errorImage=1");
                                }
                              else
                                {
                                //If all successful, move the file to the folder 'uploads'
                                $imgNewName = generateRandomString() .  date('H-i-s') . "." . $extension;
                                move_uploaded_file($_FILES["user_photo"]["tmp_name"], "assets/img/" . $imgNewName);
                                //Get the size and type of the image
                                $imgSize = ($_FILES["user_photo"]["size"] / 1024);
                                $imgType = $_FILES["user_photo"]["type"];
                                
                                mysqli_query($con, "INSERT INTO jobApply (userName, userEmail, userAge, userBiography, userJob, userInterests, image_path, image_size, image_type, image_ext, date, time) VALUES ('$username', '$email', '$age', '$biography', '$job', '$interests', '$imgNewName', '$imgSize', '$imgType', '$extension', CURDATE(), CURTIME())");
                                mysqli_close($con);
                                header("Location:job.php?success=1");
                                }
                              } 
                              
                        } else {
                            header("Location:job.php");
                        }
                        
                        
                        function generateRandomString($length = 35) {
                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
                            $charactersLength = strlen($characters);
                            $randomString = '';
                            for ($i = 0; $i < $length; $i++) {
                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                            }
                            return $randomString;
                        }
                    ?>

