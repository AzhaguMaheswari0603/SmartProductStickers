<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/addlabel.twig */
class __TwigTemplate_edfaa80a6cadc8f452e71549bcde56e7d3d919c9f8546d24bc57070e209575c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if ((($context["module_watermark_status"] ?? null) == 1)) {
            // line 33
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 36
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 39
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-position\">";
        // line 44
        echo ($context["entry_position"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_position\" id=\"input-position\" class=\"form-control\">
                ";
        // line 47
        if ((($context["module_watermark_position"] ?? null) == 8)) {
            // line 48
            echo "
                <option value=\"8\" selected=\"selected\">";
            // line 49
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 50
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 51
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 52
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 53
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 54
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 55
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 56
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 57
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 59
($context["module_watermark_position"] ?? null) == 7)) {
            // line 60
            echo "
                <option value=\"8\">";
            // line 61
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\" selected=\"selected\">";
            // line 62
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 63
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 64
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 65
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 66
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 67
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 68
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 69
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 71
($context["module_watermark_position"] ?? null) == 6)) {
            // line 72
            echo "
                <option value=\"8\">";
            // line 73
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 74
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\" selected=\"selected\">";
            // line 75
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 76
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 77
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 78
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 79
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 80
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 81
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 83
($context["module_watermark_position"] ?? null) == 5)) {
            // line 84
            echo "
                <option value=\"8\">";
            // line 85
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 86
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 87
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\" selected=\"selected\">";
            // line 88
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 89
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 90
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 91
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 92
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 93
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 95
($context["module_watermark_position"] ?? null) == 4)) {
            // line 96
            echo "
                <option value=\"8\">";
            // line 97
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 98
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 99
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 100
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\" selected=\"selected\">";
            // line 101
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 102
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 103
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 104
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 105
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 107
($context["module_watermark_position"] ?? null) == 3)) {
            // line 108
            echo "
                <option value=\"8\">";
            // line 109
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 110
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 111
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 112
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 113
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\" selected=\"selected\">";
            // line 114
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 115
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 116
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 117
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 119
($context["module_watermark_position"] ?? null) == 2)) {
            // line 120
            echo "
                <option value=\"8\">";
            // line 121
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 122
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 123
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 124
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 125
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 126
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 127
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 128
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 129
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 131
($context["module_watermark_position"] ?? null) == 1)) {
            // line 132
            echo "
                <option value=\"8\">";
            // line 133
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 134
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 135
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 136
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 137
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 138
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 139
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 140
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 141
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } else {
            // line 144
            echo "
                <option value=\"8\">";
            // line 145
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 146
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 147
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 148
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 149
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 150
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 151
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 152
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 153
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        }
        // line 156
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-opacity\">";
        // line 161
        echo ($context["entry_opacity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_opacity\" value=\"";
        // line 163
        echo ($context["module_watermark_opacity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_opacity"] ?? null);
        echo "\" id=\"opacity\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextsize\">";
        // line 168
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktextsize\" value=\"";
        // line 170
        echo ($context["module_watermark_watermarktextsize"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "\" id=\"watermarktextsize\" class=\"form-control\"/>
            </div>
          </div>
            
          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktext\">";
        // line 175
        echo ($context["entry_watermarktext"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktext\" value=\"";
        // line 177
        echo ($context["module_watermark_watermarktext"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktext"] ?? null);
        echo "\" id=\"watermarktext\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-font\">";
        // line 182
        echo ($context["entry_font"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_font\" id=\"input-font\" class=\"form-control\">
                ";
        // line 185
        if ((($context["module_watermark_font"] ?? null) == 2)) {
            // line 186
            echo "
                <option value=\"2\" selected=\"selected\">";
            // line 187
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 188
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 189
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 191
($context["module_watermark_font"] ?? null) == 1)) {
            // line 192
            echo "
                <option value=\"2\">";
            // line 193
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 194
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 195
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } else {
            // line 198
            echo "
                <option value=\"2\">";
            // line 199
            echo ($context["text_font3"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 200
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 201
            echo ($context["text_font1"] ?? null);
            echo "</option>
                ";
        }
        // line 203
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextcolor\">";
        // line 208
        echo ($context["entry_watermarktextcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_watermarktextcolor\" id=\"input-watermarktextcolor\" class=\"form-control\">
                ";
        // line 211
        if ((($context["module_watermark_watermarktextcolor"] ?? null) == 3)) {
            // line 212
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 213
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 214
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 215
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 216
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 218
($context["module_watermark_watermarktextcolor"] ?? null) == 2)) {
            // line 219
            echo "
                <option value=\"3\">";
            // line 220
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 221
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 222
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 223
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 225
($context["module_watermark_watermarktextcolor"] ?? null) == 1)) {
            // line 226
            echo "
                <option value=\"3\">";
            // line 227
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 228
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 229
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 230
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } else {
            // line 233
            echo "                <option value=\"3\">";
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 234
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 235
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 236
            echo ($context["text_white"] ?? null);
            echo "</option>
                ";
        }
        // line 238
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 243
        echo ($context["entry_createwatermark"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-createwatermark\" class=\"btn btn-primary\"><i class=\"fa fa-createwatermark\"></i> ";
        // line 245
        echo ($context["button_createwatermark"] ?? null);
        echo "</button> 
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 250
        echo ($context["entry_removecache"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-removecache\" class=\"btn btn-primary\"><i class=\"fa fa-removecache\"></i> ";
        // line 252
        echo ($context["button_removecache"] ?? null);
        echo "</button> 
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#button-createwatermark').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/createwatermark&user_token=";
        // line 264
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-createwatermark').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-createwatermark').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});

\$('#button-removecache').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/removecache&user_token=";
        // line 293
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-removecache').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-removecache').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});


</script>
";
        // line 322
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/addlabel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  839 => 322,  807 => 293,  775 => 264,  760 => 252,  755 => 250,  747 => 245,  742 => 243,  735 => 238,  730 => 236,  726 => 235,  722 => 234,  717 => 233,  711 => 230,  707 => 229,  703 => 228,  699 => 227,  696 => 226,  694 => 225,  689 => 223,  685 => 222,  681 => 221,  677 => 220,  674 => 219,  672 => 218,  667 => 216,  663 => 215,  659 => 214,  655 => 213,  652 => 212,  650 => 211,  644 => 208,  637 => 203,  632 => 201,  628 => 200,  624 => 199,  621 => 198,  615 => 195,  611 => 194,  607 => 193,  604 => 192,  602 => 191,  597 => 189,  593 => 188,  589 => 187,  586 => 186,  584 => 185,  578 => 182,  568 => 177,  563 => 175,  553 => 170,  548 => 168,  538 => 163,  533 => 161,  526 => 156,  520 => 153,  516 => 152,  512 => 151,  508 => 150,  504 => 149,  500 => 148,  496 => 147,  492 => 146,  488 => 145,  485 => 144,  479 => 141,  475 => 140,  471 => 139,  467 => 138,  463 => 137,  459 => 136,  455 => 135,  451 => 134,  447 => 133,  444 => 132,  442 => 131,  437 => 129,  433 => 128,  429 => 127,  425 => 126,  421 => 125,  417 => 124,  413 => 123,  409 => 122,  405 => 121,  402 => 120,  400 => 119,  395 => 117,  391 => 116,  387 => 115,  383 => 114,  379 => 113,  375 => 112,  371 => 111,  367 => 110,  363 => 109,  360 => 108,  358 => 107,  353 => 105,  349 => 104,  345 => 103,  341 => 102,  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  318 => 96,  316 => 95,  311 => 93,  307 => 92,  303 => 91,  299 => 90,  295 => 89,  291 => 88,  287 => 87,  283 => 86,  279 => 85,  276 => 84,  274 => 83,  269 => 81,  265 => 80,  261 => 79,  257 => 78,  253 => 77,  249 => 76,  245 => 75,  241 => 74,  237 => 73,  234 => 72,  232 => 71,  227 => 69,  223 => 68,  219 => 67,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  199 => 62,  195 => 61,  192 => 60,  190 => 59,  185 => 57,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
