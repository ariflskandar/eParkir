<svg height="210mm" width="297mm" viewBox="0 0 210 297" version="1.1" id="svg5" inkscape:version="1.1.1 (3bf5ae0d25, 2021-09-20)" sodipodi:docname="MapBlokA.svg" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">

    <g stroke="#000000" stroke-width="0.23665" fill="#e6e6e6" fill-rule="evenodd">
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'A1')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A1') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
                    <rect class="lot" transform="rotate(90)" x="5.29" y="-26.5" width="42.3" height="21.2">
                        <title>A1</title>
                    </rect>
                </a>
                @if($role == 'admin')
                @foreach($lots as $area_id => $lot)
                @if($area_id == 'A2')
                @if (isset($lot))
                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                        echo '" fill="#cc1100';
                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                        echo '" fill="#fdfd66';
                                                                                    }
                                                                                    ?>">
                    @else
                    <a href="" style="<?php echo '" fill="#389738';
                                        ?>">
                        @endif
                        @else
                        @endif
                        @endforeach
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A2') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                            @endif
                            <rect class="lot" transform="rotate(90)" x="5.29" y="-47.6" width="42.3" height="21.2">
                                <title>A2</title>
                            </rect>
                        </a>
                        @if($role == 'admin')
                        @foreach($lots as $area_id => $lot)
                        @if($area_id == 'A3')
                        @if (isset($lot))
                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                echo '" fill="#cc1100';
                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                echo '" fill="#fdfd66';
                                                                                            }
                                                                                            ?>">
                            @else
                            <a href="" style="<?php echo '" fill="#389738';
                                                ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @else
                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A3') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                    @endif
                                    <rect class="lot" transform="rotate(90)" x="5.29" y="-68.8" width="42.3" height="21.2">
                                        <title>A3</title>
                                    </rect>
                                </a>
                                @if($role == 'admin')
                                @foreach($lots as $area_id => $lot)
                                @if($area_id == 'A4')
                                @if (isset($lot))
                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                        echo '" fill="#cc1100';
                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                        echo '" fill="#fdfd66';
                                                                                                    }
                                                                                                    ?>">
                                    @else
                                    <a href="" style="<?php echo '" fill="#389738';
                                                        ?>">
                                        @endif
                                        @else
                                        @endif
                                        @endforeach
                                        @else
                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A4') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                            @endif
                                            <rect class="lot" transform="rotate(90)" x="5.29" y="-90" width="42.3" height="21.2">
                                                <title>A4</title>
                                            </rect>
                                        </a>
                                        @if($role == 'admin')
                                        @foreach($lots as $area_id => $lot)
                                        @if($area_id == 'A5')
                                        @if (isset($lot))
                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                echo '" fill="#cc1100';
                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                echo '" fill="#fdfd66';
                                                                                                            }
                                                                                                            ?>">
                                            @else
                                            <a href="" style="<?php echo '" fill="#389738';
                                                                ?>">
                                                @endif
                                                @else
                                                @endif
                                                @endforeach
                                                @else
                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A5') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                    @endif
                                                    <rect class="lot" transform="rotate(90)" x="5.29" y="-111" width="42.3" height="21.2">
                                                        <title>A5</title>
                                                    </rect>
                                                </a>
                                                @if($role == 'admin')
                                                @foreach($lots as $area_id => $lot)
                                                @if($area_id == 'A6')
                                                @if (isset($lot))
                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                        echo '" fill="#cc1100';
                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                    }
                                                                                                                    ?>">
                                                    @else
                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                        ?>">
                                                        @endif
                                                        @else
                                                        @endif
                                                        @endforeach
                                                        @else
                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A6') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                            @endif
                                                            <rect class="lot" transform="rotate(90)" x="5.29" y="-132" width="42.3" height="21.2">
                                                                <title>A6</title>
                                                            </rect>
                                                        </a>
                                                        @if($role == 'admin')
                                                        @foreach($lots as $area_id => $lot)
                                                        @if($area_id == 'A7')
                                                        @if (isset($lot))
                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                echo '" fill="#cc1100';
                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                            }
                                                                                                                            ?>">
                                                            @else
                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                ?>">
                                                                @endif
                                                                @else
                                                                @endif
                                                                @endforeach
                                                                @else
                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A7') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                    @endif
                                                                    <rect fill="#389738" class="lot" transform="rotate(90)" x="5.29" y="-153" width="42.3" height="21.2">
                                                                        <title>A7</title>
                                                                    </rect>
                                                                </a>
                                                                @if($role == 'admin')
                                                                @foreach($lots as $area_id => $lot)
                                                                @if($area_id == 'A8')
                                                                @if (isset($lot))
                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                    }
                                                                                                                                    ?>">
                                                                    @else
                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                        ?>">
                                                                        @endif
                                                                        @else
                                                                        @endif
                                                                        @endforeach
                                                                        @else
                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A8') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                            @endif
                                                                            <rect class="lot" transform="rotate(90)" x="5.29" y="-175" width="42.3" height="21.8">
                                                                                <title>A8</title>
                                                                            </rect>
                                                                        </a>
                                                                        @if($role == 'admin')
                                                                        @foreach($lots as $area_id => $lot)
                                                                        @if($area_id == 'A9')
                                                                        @if (isset($lot))
                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                            }
                                                                                                                                            ?>">
                                                                            @else
                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                ?>">
                                                                                @endif
                                                                                @else
                                                                                @endif
                                                                                @endforeach
                                                                                @else
                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A9') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                    @endif
                                                                                    <rect class="lot" transform="rotate(90)" x="5.29" y="-196" width="42.3" height="21.2">
                                                                                        <title>A9</title>
                                                                                    </rect>
                                                                                </a>
                                                                                @if($role == 'admin')
                                                                                @foreach($lots as $area_id => $lot)
                                                                                @if($area_id == 'A10')
                                                                                @if (isset($lot))
                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                    }
                                                                                                                                                    ?>">
                                                                                    @else
                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                        ?>">
                                                                                        @endif
                                                                                        @else
                                                                                        @endif
                                                                                        @endforeach
                                                                                        @else
                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A10') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                            @endif
                                                                                            <rect class="lot" transform="rotate(90)" x="5.29" y="-217" width="42.3" height="21.2">
                                                                                                <title>A10</title>
                                                                                            </rect>
                                                                                        </a>
                                                                                        @if($role == 'admin')
                                                                                        @foreach($lots as $area_id => $lot)
                                                                                        @if($area_id == 'A19')
                                                                                        @if (isset($lot))
                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                            }
                                                                                                                                                            ?>">
                                                                                            @else
                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                ?>">
                                                                                                @endif
                                                                                                @else
                                                                                                @endif
                                                                                                @endforeach
                                                                                                @else
                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A19') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                    @endif
                                                                                                    <rect class="lot" transform="rotate(90)" x="63.5" y="-196" width="42.3" height="21.2">
                                                                                                        <title>A19</title>
                                                                                                    </rect>
                                                                                                </a>
                                                                                                @if($role == 'admin')
                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                @if($area_id == 'A18')
                                                                                                @if (isset($lot))
                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                                                                                    @else
                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                        ?>">
                                                                                                        @endif
                                                                                                        @else
                                                                                                        @endif
                                                                                                        @endforeach
                                                                                                        @else
                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A18') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                            @endif
                                                                                                            <rect class="lot" transform="rotate(90)" x="63.5" y="-175" width="42.3" height="21.8">
                                                                                                                <title>A18</title>
                                                                                                            </rect>
                                                                                                        </a>
                                                                                                        @if($role == 'admin')
                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                        @if($area_id == 'A17')
                                                                                                        @if (isset($lot))
                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                            }
                                                                                                                                                                            ?>">
                                                                                                            @else
                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                ?>">
                                                                                                                @endif
                                                                                                                @else
                                                                                                                @endif
                                                                                                                @endforeach
                                                                                                                @else
                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A17') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                    @endif
                                                                                                                    <rect class="lot" transform="rotate(90)" x="63.5" y="-153" width="42.3" height="21.2">
                                                                                                                        <title>A17</title>
                                                                                                                    </rect>
                                                                                                                </a>
                                                                                                                @if($role == 'admin')
                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                @if($area_id == 'A16')
                                                                                                                @if (isset($lot))
                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>">
                                                                                                                    @else
                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                        ?>">
                                                                                                                        @endif
                                                                                                                        @else
                                                                                                                        @endif
                                                                                                                        @endforeach
                                                                                                                        @else
                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A16') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                            @endif
                                                                                                                            <rect class="lot" transform="rotate(90)" x="63.5" y="-132" width="42.3" height="21.2">
                                                                                                                                <title>A16</title>
                                                                                                                            </rect>
                                                                                                                        </a>
                                                                                                                        @if($role == 'admin')
                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                        @if($area_id == 'A15')
                                                                                                                        @if (isset($lot))
                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>">
                                                                                                                            @else
                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                ?>">
                                                                                                                                @endif
                                                                                                                                @else
                                                                                                                                @endif
                                                                                                                                @endforeach
                                                                                                                                @else
                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A15') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                    @endif
                                                                                                                                    <rect class="lot" transform="rotate(90)" x="63.5" y="-111" width="42.3" height="21.2">
                                                                                                                                        <title>A15</title>
                                                                                                                                    </rect>
                                                                                                                                </a>
                                                                                                                                @if($role == 'admin')
                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                @if($area_id == 'A14')
                                                                                                                                @if (isset($lot))
                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?>">
                                                                                                                                    @else
                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                        ?>">
                                                                                                                                        @endif
                                                                                                                                        @else
                                                                                                                                        @endif
                                                                                                                                        @endforeach
                                                                                                                                        @else
                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A14') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                            @endif
                                                                                                                                            <rect class="lot" transform="rotate(90)" x="63.5" y="-90" width="42.3" height="21.2">
                                                                                                                                                <title>A14</title>
                                                                                                                                            </rect>
                                                                                                                                        </a>
                                                                                                                                        @if($role == 'admin')
                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                        @if($area_id == 'A13')
                                                                                                                                        @if (isset($lot))
                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                            }
                                                                                                                                                                                                            ?>">
                                                                                                                                            @else
                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                ?>">
                                                                                                                                                @endif
                                                                                                                                                @else
                                                                                                                                                @endif
                                                                                                                                                @endforeach
                                                                                                                                                @else
                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A13') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                    @endif
                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="63.5" y="-68.8" width="42.3" height="21.2">
                                                                                                                                                        <title>A13</title>
                                                                                                                                                    </rect>
                                                                                                                                                </a>
                                                                                                                                                @if($role == 'admin')
                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                @if($area_id == 'A12')
                                                                                                                                                @if (isset($lot))
                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                    ?>">
                                                                                                                                                    @else
                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                        ?>">
                                                                                                                                                        @endif
                                                                                                                                                        @else
                                                                                                                                                        @endif
                                                                                                                                                        @endforeach
                                                                                                                                                        @else
                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A12') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                            @endif
                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="63.5" y="-47.6" width="42.3" height="21.2">
                                                                                                                                                                <title>A12</title>
                                                                                                                                                            </rect>
                                                                                                                                                        </a>
                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                        @if($area_id == 'A11')
                                                                                                                                                        @if (isset($lot))
                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                            ?>">
                                                                                                                                                            @else
                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                ?>">
                                                                                                                                                                @endif
                                                                                                                                                                @else
                                                                                                                                                                @endif
                                                                                                                                                                @endforeach
                                                                                                                                                                @else
                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A11') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                    @endif
                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="63.5" y="-26.5" width="42.3" height="21.2">
                                                                                                                                                                        <title>A11</title>
                                                                                                                                                                    </rect>
                                                                                                                                                                </a>
                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                @if($area_id == 'A28')
                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                    @else
                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                        ?>">
                                                                                                                                                                        @endif
                                                                                                                                                                        @else
                                                                                                                                                                        @endif
                                                                                                                                                                        @endforeach
                                                                                                                                                                        @else
                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','28')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A28') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                            @endif
                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="106" y="-26.5" width="42.3" height="21.2">
                                                                                                                                                                                <title>A28</title>
                                                                                                                                                                            </rect>
                                                                                                                                                                        </a>
                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                        @if($area_id == 'A27')
                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                            @else
                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                ?>">
                                                                                                                                                                                @endif
                                                                                                                                                                                @else
                                                                                                                                                                                @endif
                                                                                                                                                                                @endforeach
                                                                                                                                                                                @else
                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','27')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A27') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                    @endif
                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="106" y="-47.6" width="42.3" height="21.2">
                                                                                                                                                                                        <title>A27</title>
                                                                                                                                                                                    </rect>
                                                                                                                                                                                </a>
                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                @if($area_id == 'A26')
                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                    @else
                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                        ?>">
                                                                                                                                                                                        @endif
                                                                                                                                                                                        @else
                                                                                                                                                                                        @endif
                                                                                                                                                                                        @endforeach
                                                                                                                                                                                        @else
                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','26')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A26') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                            @endif
                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="106" y="-68.8" width="42.3" height="21.2">
                                                                                                                                                                                                <title>A26</title>
                                                                                                                                                                                            </rect>
                                                                                                                                                                                        </a>
                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                        @if($area_id == 'A25')
                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                            @else
                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                @endif
                                                                                                                                                                                                @else
                                                                                                                                                                                                @endif
                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                @else
                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A25') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                    @endif
                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="106" y="-90" width="42.3" height="21.2">
                                                                                                                                                                                                        <title>A25</title>
                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                </a>
                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                @if($area_id == 'A24')
                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                    @else
                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                        @endif
                                                                                                                                                                                                        @else
                                                                                                                                                                                                        @endif
                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                        @else
                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A24') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                            @endif
                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="106" y="-111" width="42.3" height="21.2">
                                                                                                                                                                                                                <title>A24</title>
                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                        @if($area_id == 'A23')
                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                            @else
                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A23') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="106" y="-132" width="42.3" height="21.2">
                                                                                                                                                                                                                        <title>A23</title>
                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                @if($area_id == 'A22')
                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A22') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="106" y="-153" width="42.3" height="21.2">
                                                                                                                                                                                                                                <title>A22</title>
                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                        @if($area_id == 'A21')
                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A21') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="106" y="-175" width="42.3" height="21.8">
                                                                                                                                                                                                                                        <title>A21</title>
                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                @if($area_id == 'A20')
                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A20') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="106" y="-196" width="42.3" height="21.2">
                                                                                                                                                                                                                                                <title>A20</title>
                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                        @if($area_id == 'A38')
                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','38')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A38') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="164" y="-217" width="42.3" height="21.2">
                                                                                                                                                                                                                                                        <title>A38</title>
                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                @if($area_id == 'A37')
                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','37')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A37') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="164" y="-196" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                <title>A37</title>
                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                        @if($area_id == 'A36')
                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','36')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A36') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="164" y="-175" width="42.3" height="21.8">
                                                                                                                                                                                                                                                                        <title>A36</title>
                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                @if($area_id == 'A35')
                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','35')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A35') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="164" y="-153" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                <title>A35</title>
                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                        @if($area_id == 'A34')
                                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','34')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A34') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="164" y="-132" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                        <title>A34</title>
                                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                @if($area_id == 'A33')
                                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','33')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A33') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="164" y="-111" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                <title>A33</title>
                                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                        @if($area_id == 'A32')
                                                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','32')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A32') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="164" y="-90" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                        <title>A32</title>
                                                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                @if($area_id == 'A31')
                                                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','31')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A31') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="164" y="-68.8" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                <title>A31</title>
                                                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                        @if($area_id == 'A30')
                                                                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','30')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A30') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="164" y="-47.6" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                        <title>A30</title>
                                                                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                                @if($area_id == 'A29')
                                                                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','29')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A29') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="164" y="-26.5" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                                <title>A29</title>
                                                                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                                        @if($area_id == 'A39')
                                                                                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','39')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A39') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                                    @endif<rect class="lot" transform="scale(-1)" x="-291" y="-148" width="42.3" height="21.2">

                                                                                                                                                                                                                                                                                                                                        <title>A39</title>
                                                                                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                                                @if($area_id == 'A40')
                                                                                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','40')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A40') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                                                                                            <rect class="lot" transform="scale(-1)" x="-291" y="-127" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                                                <title>A40</title>
                                                                                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                        @if($role == 'admin')
                                                                                                                                                                                                                                                                                                                                        @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                                                        @if($area_id == 'A41')
                                                                                                                                                                                                                                                                                                                                        @if (isset($lot))
                                                                                                                                                                                                                                                                                                                                        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                                                echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                                                                                                                                                                                                                                                                                                            @else
                                                                                                                                                                                                                                                                                                                                            <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                                                ?>">
                                                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                                                @endforeach
                                                                                                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                                                                                                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','41')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A41') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                                                                                                    <rect class="lot" transform="scale(-1)" x="-291" y="-106" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                                                        <title>A41</title>
                                                                                                                                                                                                                                                                                                                                                    </rect>
                                                                                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                                                                                @if($role == 'admin')
                                                                                                                                                                                                                                                                                                                                                @foreach($lots as $area_id => $lot)
                                                                                                                                                                                                                                                                                                                                                @if($area_id == 'A42')
                                                                                                                                                                                                                                                                                                                                                @if (isset($lot))
                                                                                                                                                                                                                                                                                                                                                <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                                                                                                                                                                                                                                                                                                                                                    if ($lot['lot_status'] == 'approved') {
                                                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#cc1100';
                                                                                                                                                                                                                                                                                                                                                                                                                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                                                                                                                                                                                                                                                                                                                                                        echo '" fill="#fdfd66';
                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                    ?>">
                                                                                                                                                                                                                                                                                                                                                    @else
                                                                                                                                                                                                                                                                                                                                                    <a href="" style="<?php echo '" fill="#389738';
                                                                                                                                                                                                                                                                                                                                                                        ?>">
                                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                                        @endforeach
                                                                                                                                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                                                                                                                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','42')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'A42') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                                                                                                                                                                                                                                                                                                                                                            @endif
                                                                                                                                                                                                                                                                                                                                                            <rect class="lot" transform="scale(-1)" x="-291" y="-84.7" width="42.3" height="21.2">
                                                                                                                                                                                                                                                                                                                                                                <title>A42</title>
                                                                                                                                                                                                                                                                                                                                                            </rect>
                                                                                                                                                                                                                                                                                                                                                        </a>
    </g>
    <g fill="#000000" font-family="sans-serif">
        <text transform="matrix(.876 -.00249 .00325 1.14 0 0)" x="274.69351" y="25.888197" font-size="8.18px" stroke-width=".204" style="line-height:1.25" xml:space="preserve">
            <tspan x="274.69351" y="25.888197" stroke-width=".204">Entrance</tspan>
        </text>
        <g font-size="6.34px" stroke-width=".159">
            <text transform="scale(.842 1.19)" x="15.863011" y="23.100395" style="line-height:1.25" xml:space="preserve">
                <tspan x="15.863011" y="23.100395" stroke-width=".159">A1</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="40.419739" y="23.152735" style="line-height:1.25" xml:space="preserve">
                <tspan x="40.419739" y="23.152735" stroke-width=".159">A2</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="64.812057" y="23.120562" style="line-height:1.25" xml:space="preserve">
                <tspan x="64.812057" y="23.120562" stroke-width=".159">A3</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="89.987358" y="23.312952" style="line-height:1.25" xml:space="preserve">
                <tspan x="89.987358" y="23.312952" stroke-width=".159">A4</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="115.45148" y="23.010992" style="line-height:1.25" xml:space="preserve">
                <tspan x="115.45148" y="23.010992" stroke-width=".159">A5</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="141.15419" y="23.270954" style="line-height:1.25" xml:space="preserve">
                <tspan x="141.15419" y="23.270954" stroke-width=".159">A6</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="166.17276" y="23.278915" style="line-height:1.25" xml:space="preserve">
                <tspan x="166.17276" y="23.278915" stroke-width=".159">A7</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="190.40729" y="23.234377" style="line-height:1.25" xml:space="preserve">
                <tspan x="190.40729" y="23.234377" stroke-width=".159">A8</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="216.57648" y="23.13756" style="line-height:1.25" xml:space="preserve">
                <tspan x="216.57648" y="23.13756" stroke-width=".159">A9</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="239.62498" y="23.208204" style="line-height:1.25" xml:space="preserve">
                <tspan x="239.62498" y="23.208204" stroke-width=".159">A10</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="13.945044" y="73.288467" style="line-height:1.25" xml:space="preserve">
                <tspan x="13.945044" y="73.288467" stroke-width=".159">A11</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="38.397251" y="73.203079" style="line-height:1.25" xml:space="preserve">
                <tspan x="38.397251" y="73.203079" stroke-width=".159">A12</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="63.7701" y="72.916786" style="line-height:1.25" xml:space="preserve">
                <tspan x="63.7701" y="72.916786" stroke-width=".159">A13</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="88.856422" y="73.399216" style="line-height:1.25" xml:space="preserve">
                <tspan x="88.856422" y="73.399216" stroke-width=".159">A14</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="113.64223" y="73.054268" style="line-height:1.25" xml:space="preserve">
                <tspan x="113.64223" y="73.054268" stroke-width=".159">A15</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="138.77315" y="73.067284" style="line-height:1.25" xml:space="preserve">
                <tspan x="138.77315" y="73.067284" stroke-width=".159">A16</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="164.1207" y="73.052063" style="line-height:1.25" xml:space="preserve">
                <tspan x="164.1207" y="73.052063" stroke-width=".159">A17</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="214.44279" y="72.76873" style="line-height:1.25" xml:space="preserve">
                <tspan x="214.44279" y="72.76873" stroke-width=".159">A19</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="214.24109" y="108.72548" style="line-height:1.25" xml:space="preserve">
                <tspan x="214.24109" y="108.72548" stroke-width=".159">A20</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="188.06799" y="108.76557" style="line-height:1.25" xml:space="preserve">
                <tspan x="188.06799" y="108.76557" stroke-width=".159">A21</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="163.35249" y="108.83376" style="line-height:1.25" xml:space="preserve">
                <tspan x="163.35249" y="108.83376" stroke-width=".159">A22</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="138.86026" y="108.94393" style="line-height:1.25" xml:space="preserve">
                <tspan x="138.86026" y="108.94393" stroke-width=".159">A23</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="113.51846" y="108.88493" style="line-height:1.25" xml:space="preserve">
                <tspan x="113.51846" y="108.88493" stroke-width=".159">A24</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="88.532677" y="108.79919" style="line-height:1.25" xml:space="preserve">
                <tspan x="88.532677" y="108.79919" stroke-width=".159">A25</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="63.462402" y="108.54928" style="line-height:1.25" xml:space="preserve">
                <tspan x="63.462402" y="108.54928" stroke-width=".159">A26</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="38.350586" y="108.72263" style="line-height:1.25" xml:space="preserve">
                <tspan x="38.350586" y="108.72263" stroke-width=".159">A27</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="13.052028" y="108.67604" style="line-height:1.25" xml:space="preserve">
                <tspan x="13.052028" y="108.67604" stroke-width=".159">A28</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="12.27411" y="158.99706" style="line-height:1.25" xml:space="preserve">
                <tspan x="12.27411" y="158.99706" stroke-width=".159">A29</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="38.094227" y="158.97351" style="line-height:1.25" xml:space="preserve">
                <tspan x="38.094227" y="158.97351" stroke-width=".159">A30</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="63.855888" y="158.87254" style="line-height:1.25" xml:space="preserve">
                <tspan x="63.855888" y="158.87254" stroke-width=".159">A31</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="88.749245" y="158.78529" style="line-height:1.25" xml:space="preserve">
                <tspan x="88.749245" y="158.78529" stroke-width=".159">A32</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="113.56796" y="158.96202" style="line-height:1.25" xml:space="preserve">
                <tspan x="113.56796" y="158.96202" stroke-width=".159">A33</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="138.26976" y="158.96202" style="line-height:1.25" xml:space="preserve">
                <tspan x="138.26976" y="158.96202" stroke-width=".159">A34</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="163.61009" y="158.9735" style="line-height:1.25" xml:space="preserve">
                <tspan x="163.61009" y="158.9735" stroke-width=".159">A35</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="189.356" y="159.05629" style="line-height:1.25" xml:space="preserve">
                <tspan x="189.356" y="159.05629" stroke-width=".159">A36</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="214.35278" y="159.07698" style="line-height:1.25" xml:space="preserve">
                <tspan x="214.35278" y="159.07698" stroke-width=".159">A37</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="239.69267" y="158.9391" style="line-height:1.25" xml:space="preserve">
                <tspan x="239.69267" y="158.9391" stroke-width=".159">A38</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="316.14227" y="117.85267" style="line-height:1.25" xml:space="preserve">
                <tspan x="316.14227" y="117.85267" stroke-width=".159">A39</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="316.03839" y="100.0812" style="line-height:1.25" xml:space="preserve">
                <tspan x="316.03839" y="100.0812" stroke-width=".159">A40</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="316.07077" y="82.507172" style="line-height:1.25" xml:space="preserve">
                <tspan x="316.07077" y="82.507172" stroke-width=".159">A41</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="315.8338" y="64.671379" style="line-height:1.25" xml:space="preserve">
                <tspan x="315.8338" y="64.671379" stroke-width=".159">A42</tspan>
            </text>
            <text transform="scale(.842 1.19)" x="189.56743" y="72.860901" style="line-height:1.25" xml:space="preserve">
                <tspan x="189.56743" y="72.860901" stroke-width=".159">A18</tspan>
            </text>
        </g>
    </g>
</svg>