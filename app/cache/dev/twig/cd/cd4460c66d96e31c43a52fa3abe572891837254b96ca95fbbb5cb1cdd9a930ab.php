<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3dae446095c287aa615f89ce38fd8607750d9155f4bd66f6150694f28bca168f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2079bb314ee6c5f53e99185027fbf5a5a5e31e00f71e41db936bd37f5e946a52 = $this->env->getExtension("native_profiler");
        $__internal_2079bb314ee6c5f53e99185027fbf5a5a5e31e00f71e41db936bd37f5e946a52->enter($__internal_2079bb314ee6c5f53e99185027fbf5a5a5e31e00f71e41db936bd37f5e946a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2079bb314ee6c5f53e99185027fbf5a5a5e31e00f71e41db936bd37f5e946a52->leave($__internal_2079bb314ee6c5f53e99185027fbf5a5a5e31e00f71e41db936bd37f5e946a52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecfbc3c33594437c668797fb444597cfac58ad3cd9834d4301a86e8e65001fad = $this->env->getExtension("native_profiler");
        $__internal_ecfbc3c33594437c668797fb444597cfac58ad3cd9834d4301a86e8e65001fad->enter($__internal_ecfbc3c33594437c668797fb444597cfac58ad3cd9834d4301a86e8e65001fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ecfbc3c33594437c668797fb444597cfac58ad3cd9834d4301a86e8e65001fad->leave($__internal_ecfbc3c33594437c668797fb444597cfac58ad3cd9834d4301a86e8e65001fad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
