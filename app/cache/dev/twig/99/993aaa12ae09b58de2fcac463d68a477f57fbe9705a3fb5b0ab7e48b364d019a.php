<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_da9744f7629b11b7ba84ccae630fe5abc7995f7c87a4765bb77714f1e9984835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4cb381a66e0ff48268e7e57c3f8bcf88479acce040ec1d0b3b7f303c3400b0e = $this->env->getExtension("native_profiler");
        $__internal_f4cb381a66e0ff48268e7e57c3f8bcf88479acce040ec1d0b3b7f303c3400b0e->enter($__internal_f4cb381a66e0ff48268e7e57c3f8bcf88479acce040ec1d0b3b7f303c3400b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cb381a66e0ff48268e7e57c3f8bcf88479acce040ec1d0b3b7f303c3400b0e->leave($__internal_f4cb381a66e0ff48268e7e57c3f8bcf88479acce040ec1d0b3b7f303c3400b0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76b6cdf8d13bd39c2247be3a51e309308d39f07b5e0779f11b290e6f1026ba76 = $this->env->getExtension("native_profiler");
        $__internal_76b6cdf8d13bd39c2247be3a51e309308d39f07b5e0779f11b290e6f1026ba76->enter($__internal_76b6cdf8d13bd39c2247be3a51e309308d39f07b5e0779f11b290e6f1026ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_76b6cdf8d13bd39c2247be3a51e309308d39f07b5e0779f11b290e6f1026ba76->leave($__internal_76b6cdf8d13bd39c2247be3a51e309308d39f07b5e0779f11b290e6f1026ba76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
