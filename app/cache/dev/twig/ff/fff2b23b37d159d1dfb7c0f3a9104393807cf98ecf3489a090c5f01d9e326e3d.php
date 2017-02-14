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
        $__internal_e238503c2c2e735c6e7303abd3a155ee302dd4e4ba35e6dc6f2464411e16aad3 = $this->env->getExtension("native_profiler");
        $__internal_e238503c2c2e735c6e7303abd3a155ee302dd4e4ba35e6dc6f2464411e16aad3->enter($__internal_e238503c2c2e735c6e7303abd3a155ee302dd4e4ba35e6dc6f2464411e16aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e238503c2c2e735c6e7303abd3a155ee302dd4e4ba35e6dc6f2464411e16aad3->leave($__internal_e238503c2c2e735c6e7303abd3a155ee302dd4e4ba35e6dc6f2464411e16aad3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f064db1e41a357760c9fb4f4818a57279f8241eb063cfd34dd9adb349f7ac8d = $this->env->getExtension("native_profiler");
        $__internal_5f064db1e41a357760c9fb4f4818a57279f8241eb063cfd34dd9adb349f7ac8d->enter($__internal_5f064db1e41a357760c9fb4f4818a57279f8241eb063cfd34dd9adb349f7ac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_5f064db1e41a357760c9fb4f4818a57279f8241eb063cfd34dd9adb349f7ac8d->leave($__internal_5f064db1e41a357760c9fb4f4818a57279f8241eb063cfd34dd9adb349f7ac8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_686982d49d94d2bc4ecfa4d6aa81192b1a107a6e6e4ef9a7d184656e7582cd33 = $this->env->getExtension("native_profiler");
        $__internal_686982d49d94d2bc4ecfa4d6aa81192b1a107a6e6e4ef9a7d184656e7582cd33->enter($__internal_686982d49d94d2bc4ecfa4d6aa81192b1a107a6e6e4ef9a7d184656e7582cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_686982d49d94d2bc4ecfa4d6aa81192b1a107a6e6e4ef9a7d184656e7582cd33->leave($__internal_686982d49d94d2bc4ecfa4d6aa81192b1a107a6e6e4ef9a7d184656e7582cd33_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_248c9feccb57a6d56baadf3c78120db02f3b50504b3034f965c691edac17582d = $this->env->getExtension("native_profiler");
        $__internal_248c9feccb57a6d56baadf3c78120db02f3b50504b3034f965c691edac17582d->enter($__internal_248c9feccb57a6d56baadf3c78120db02f3b50504b3034f965c691edac17582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_248c9feccb57a6d56baadf3c78120db02f3b50504b3034f965c691edac17582d->leave($__internal_248c9feccb57a6d56baadf3c78120db02f3b50504b3034f965c691edac17582d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34261fb2ee912042d104122f1486ea46c7858d37263ff407d08f264e54ff8b19 = $this->env->getExtension("native_profiler");
        $__internal_34261fb2ee912042d104122f1486ea46c7858d37263ff407d08f264e54ff8b19->enter($__internal_34261fb2ee912042d104122f1486ea46c7858d37263ff407d08f264e54ff8b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34261fb2ee912042d104122f1486ea46c7858d37263ff407d08f264e54ff8b19->leave($__internal_34261fb2ee912042d104122f1486ea46c7858d37263ff407d08f264e54ff8b19_prof);

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
