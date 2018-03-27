<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6b36a39781aaacaaa8b9f93cdb41841d3965a0d4687d90578a11c2642b7b5615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26c8aec277f28d01b56c6411e8eee5d2952f92c6e1c78932ba72142ea0260861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c8aec277f28d01b56c6411e8eee5d2952f92c6e1c78932ba72142ea0260861->enter($__internal_26c8aec277f28d01b56c6411e8eee5d2952f92c6e1c78932ba72142ea0260861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fa398dea744d0d414f559708a49d319f97e84aa1580b0449c2f86b21f38aa381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa398dea744d0d414f559708a49d319f97e84aa1580b0449c2f86b21f38aa381->enter($__internal_fa398dea744d0d414f559708a49d319f97e84aa1580b0449c2f86b21f38aa381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_26c8aec277f28d01b56c6411e8eee5d2952f92c6e1c78932ba72142ea0260861->leave($__internal_26c8aec277f28d01b56c6411e8eee5d2952f92c6e1c78932ba72142ea0260861_prof);

        
        $__internal_fa398dea744d0d414f559708a49d319f97e84aa1580b0449c2f86b21f38aa381->leave($__internal_fa398dea744d0d414f559708a49d319f97e84aa1580b0449c2f86b21f38aa381_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
