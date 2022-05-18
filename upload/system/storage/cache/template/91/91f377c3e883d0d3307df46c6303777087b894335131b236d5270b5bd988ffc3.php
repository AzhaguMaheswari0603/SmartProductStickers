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
class __TwigTemplate_aeb721e1db0c199abe427668c3b4ced0ba2f4cb4ab29be5b8a2feeee58db909d extends \Twig\Template
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
              <select name=\"module_addlabel_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if ((($context["module_addlabel_status"] ?? null) == 1)) {
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
              <select name=\"module_addlabel_position\" id=\"input-position\" class=\"form-control\">
                ";
        // line 47
        if ((($context["module_watermark_position"] ?? null) == 3)) {
            // line 48
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 49
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 50
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 51
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 55
($context["module_watermark_position"] ?? null) == 2)) {
            // line 56
            echo "
                <option value=\"3\">";
            // line 57
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 58
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 59
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 60
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 63
($context["module_watermark_position"] ?? null) == 6)) {
            // line 64
            echo "
                <option value=\"8\">";
            // line 65
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 66
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\" selected=\"selected\">";
            // line 67
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 68
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 69
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 70
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 71
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 72
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 73
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 75
($context["module_watermark_position"] ?? null) == 5)) {
            // line 76
            echo "
                <option value=\"8\">";
            // line 77
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 78
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 79
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\" selected=\"selected\">";
            // line 80
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 81
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 82
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 83
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 84
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 85
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 87
($context["module_watermark_position"] ?? null) == 4)) {
            // line 88
            echo "
                <option value=\"8\">";
            // line 89
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 90
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 91
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 92
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\" selected=\"selected\">";
            // line 93
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 94
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 95
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 96
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 97
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 99
($context["module_watermark_position"] ?? null) == 3)) {
            // line 100
            echo "
                <option value=\"8\">";
            // line 101
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 102
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 103
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 104
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 105
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\" selected=\"selected\">";
            // line 106
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 107
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 108
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 109
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 111
($context["module_watermark_position"] ?? null) == 2)) {
            // line 112
            echo "
                <option value=\"8\">";
            // line 113
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 114
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 115
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 116
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 117
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 118
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 119
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 120
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 121
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 123
($context["module_watermark_position"] ?? null) == 1)) {
            // line 124
            echo "
                <option value=\"8\">";
            // line 125
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 126
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 127
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 128
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 129
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 130
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 131
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 132
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 133
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } else {
            // line 136
            echo "
                <option value=\"8\">";
            // line 137
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 138
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 139
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 140
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 141
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 142
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 143
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 144
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 145
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        }
        // line 148
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-opacity\">";
        // line 153
        echo ($context["entry_opacity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_opacity\" value=\"";
        // line 155
        echo ($context["module_watermark_opacity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_opacity"] ?? null);
        echo "\" id=\"opacity\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextsize\">";
        // line 160
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktextsize\" value=\"";
        // line 162
        echo ($context["module_watermark_watermarktextsize"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "\" id=\"watermarktextsize\" class=\"form-control\"/>
            </div>
          </div>
            
          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktext\">";
        // line 167
        echo ($context["entry_watermarktext"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktext\" value=\"";
        // line 169
        echo ($context["module_watermark_watermarktext"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktext"] ?? null);
        echo "\" id=\"watermarktext\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-font\">";
        // line 174
        echo ($context["entry_font"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_font\" id=\"input-font\" class=\"form-control\">
                ";
        // line 177
        if ((($context["module_watermark_font"] ?? null) == 2)) {
            // line 178
            echo "
                <option value=\"2\" selected=\"selected\">";
            // line 179
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 180
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 181
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 183
($context["module_watermark_font"] ?? null) == 1)) {
            // line 184
            echo "
                <option value=\"2\">";
            // line 185
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 186
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 187
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } else {
            // line 190
            echo "
                <option value=\"2\">";
            // line 191
            echo ($context["text_font3"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 192
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 193
            echo ($context["text_font1"] ?? null);
            echo "</option>
                ";
        }
        // line 195
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextcolor\">";
        // line 200
        echo ($context["entry_watermarktextcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_watermarktextcolor\" id=\"input-watermarktextcolor\" class=\"form-control\">
                ";
        // line 203
        if ((($context["module_watermark_watermarktextcolor"] ?? null) == 3)) {
            // line 204
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 205
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 206
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 207
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 208
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 210
($context["module_watermark_watermarktextcolor"] ?? null) == 2)) {
            // line 211
            echo "
                <option value=\"3\">";
            // line 212
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 213
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 214
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 215
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 217
($context["module_watermark_watermarktextcolor"] ?? null) == 1)) {
            // line 218
            echo "
                <option value=\"3\">";
            // line 219
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 220
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 221
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 222
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } else {
            // line 225
            echo "                <option value=\"3\">";
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 226
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 227
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 228
            echo ($context["text_white"] ?? null);
            echo "</option>
                ";
        }
        // line 230
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 235
        echo ($context["entry_createwatermark"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-createwatermark\" class=\"btn btn-primary\"><i class=\"fa fa-createwatermark\"></i> ";
        // line 237
        echo ($context["button_createwatermark"] ?? null);
        echo "</button> 
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 242
        echo ($context["entry_removecache"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-removecache\" class=\"btn btn-primary\"><i class=\"fa fa-removecache\"></i> ";
        // line 244
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
        // line 256
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
        // line 285
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
        // line 314
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
        return array (  801 => 314,  769 => 285,  737 => 256,  722 => 244,  717 => 242,  709 => 237,  704 => 235,  697 => 230,  692 => 228,  688 => 227,  684 => 226,  679 => 225,  673 => 222,  669 => 221,  665 => 220,  661 => 219,  658 => 218,  656 => 217,  651 => 215,  647 => 214,  643 => 213,  639 => 212,  636 => 211,  634 => 210,  629 => 208,  625 => 207,  621 => 206,  617 => 205,  614 => 204,  612 => 203,  606 => 200,  599 => 195,  594 => 193,  590 => 192,  586 => 191,  583 => 190,  577 => 187,  573 => 186,  569 => 185,  566 => 184,  564 => 183,  559 => 181,  555 => 180,  551 => 179,  548 => 178,  546 => 177,  540 => 174,  530 => 169,  525 => 167,  515 => 162,  510 => 160,  500 => 155,  495 => 153,  488 => 148,  482 => 145,  478 => 144,  474 => 143,  470 => 142,  466 => 141,  462 => 140,  458 => 139,  454 => 138,  450 => 137,  447 => 136,  441 => 133,  437 => 132,  433 => 131,  429 => 130,  425 => 129,  421 => 128,  417 => 127,  413 => 126,  409 => 125,  406 => 124,  404 => 123,  399 => 121,  395 => 120,  391 => 119,  387 => 118,  383 => 117,  379 => 116,  375 => 115,  371 => 114,  367 => 113,  364 => 112,  362 => 111,  357 => 109,  353 => 108,  349 => 107,  345 => 106,  341 => 105,  337 => 104,  333 => 103,  329 => 102,  325 => 101,  322 => 100,  320 => 99,  315 => 97,  311 => 96,  307 => 95,  303 => 94,  299 => 93,  295 => 92,  291 => 91,  287 => 90,  283 => 89,  280 => 88,  278 => 87,  273 => 85,  269 => 84,  265 => 83,  261 => 82,  257 => 81,  253 => 80,  249 => 79,  245 => 78,  241 => 77,  238 => 76,  236 => 75,  231 => 73,  227 => 72,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  171 => 55,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
