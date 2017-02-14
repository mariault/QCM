<?php

/* base.html.twig */
class __TwigTemplate_de06180951731aee203591ecef202abdf62c0138288327fda69bae8c1650ff34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b086b6c432ea886cf9f51c238587f8c3ee47bdadda73df30fe7141157a23e3c = $this->env->getExtension("native_profiler");
        $__internal_6b086b6c432ea886cf9f51c238587f8c3ee47bdadda73df30fe7141157a23e3c->enter($__internal_6b086b6c432ea886cf9f51c238587f8c3ee47bdadda73df30fe7141157a23e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6b086b6c432ea886cf9f51c238587f8c3ee47bdadda73df30fe7141157a23e3c->leave($__internal_6b086b6c432ea886cf9f51c238587f8c3ee47bdadda73df30fe7141157a23e3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_614e75ef7be3dc62c4f53f7ddc143e81849f82ed40c2d6a25b39ba646400bfb5 = $this->env->getExtension("native_profiler");
        $__internal_614e75ef7be3dc62c4f53f7ddc143e81849f82ed40c2d6a25b39ba646400bfb5->enter($__internal_614e75ef7be3dc62c4f53f7ddc143e81849f82ed40c2d6a25b39ba646400bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_614e75ef7be3dc62c4f53f7ddc143e81849f82ed40c2d6a25b39ba646400bfb5->leave($__internal_614e75ef7be3dc62c4f53f7ddc143e81849f82ed40c2d6a25b39ba646400bfb5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93ecf4c97ca73c9f79db81016b43515589c3d01d0f51da2a50d95d3a68f8f16f = $this->env->getExtension("native_profiler");
        $__internal_93ecf4c97ca73c9f79db81016b43515589c3d01d0f51da2a50d95d3a68f8f16f->enter($__internal_93ecf4c97ca73c9f79db81016b43515589c3d01d0f51da2a50d95d3a68f8f16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93ecf4c97ca73c9f79db81016b43515589c3d01d0f51da2a50d95d3a68f8f16f->leave($__internal_93ecf4c97ca73c9f79db81016b43515589c3d01d0f51da2a50d95d3a68f8f16f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_80897f66651452bd18ace160cff4e4b0b5fc39ef16c31612bf99a6fd02af7d7d = $this->env->getExtension("native_profiler");
        $__internal_80897f66651452bd18ace160cff4e4b0b5fc39ef16c31612bf99a6fd02af7d7d->enter($__internal_80897f66651452bd18ace160cff4e4b0b5fc39ef16c31612bf99a6fd02af7d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_80897f66651452bd18ace160cff4e4b0b5fc39ef16c31612bf99a6fd02af7d7d->leave($__internal_80897f66651452bd18ace160cff4e4b0b5fc39ef16c31612bf99a6fd02af7d7d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b09ac2e9f1b623e3ac6055c2fe603d1550cc8b6c5aa8670134018331cee30095 = $this->env->getExtension("native_profiler");
        $__internal_b09ac2e9f1b623e3ac6055c2fe603d1550cc8b6c5aa8670134018331cee30095->enter($__internal_b09ac2e9f1b623e3ac6055c2fe603d1550cc8b6c5aa8670134018331cee30095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b09ac2e9f1b623e3ac6055c2fe603d1550cc8b6c5aa8670134018331cee30095->leave($__internal_b09ac2e9f1b623e3ac6055c2fe603d1550cc8b6c5aa8670134018331cee30095_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QCM{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}Hello QCM{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
