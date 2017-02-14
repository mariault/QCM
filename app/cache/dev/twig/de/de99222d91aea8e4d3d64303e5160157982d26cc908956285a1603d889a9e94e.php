<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_208f372052a5c63ba36c24ab530ee590005d3cbbff7701cf7d4cc1b782dda165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c6d693e108b6c8eee6c80249496b1f9f35b5a22509172a868e8f6e37024afb51 = $this->env->getExtension("native_profiler");
        $__internal_c6d693e108b6c8eee6c80249496b1f9f35b5a22509172a868e8f6e37024afb51->enter($__internal_c6d693e108b6c8eee6c80249496b1f9f35b5a22509172a868e8f6e37024afb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d693e108b6c8eee6c80249496b1f9f35b5a22509172a868e8f6e37024afb51->leave($__internal_c6d693e108b6c8eee6c80249496b1f9f35b5a22509172a868e8f6e37024afb51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6db99b735ad856a8519b7ebf18262c40ce169ebfea5f409a64c8bf3fa4ad8114 = $this->env->getExtension("native_profiler");
        $__internal_6db99b735ad856a8519b7ebf18262c40ce169ebfea5f409a64c8bf3fa4ad8114->enter($__internal_6db99b735ad856a8519b7ebf18262c40ce169ebfea5f409a64c8bf3fa4ad8114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6db99b735ad856a8519b7ebf18262c40ce169ebfea5f409a64c8bf3fa4ad8114->leave($__internal_6db99b735ad856a8519b7ebf18262c40ce169ebfea5f409a64c8bf3fa4ad8114_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
