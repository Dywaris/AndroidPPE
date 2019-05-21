<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f2c3b18ef74b1145de9ae2153fd23888c698e088667c15599d9df1191cd647c4 extends Twig_Template
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
        $__internal_1f0d0732bcde0ee229b200a3db1ba659779c3256c4b934417220c914a3854c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0d0732bcde0ee229b200a3db1ba659779c3256c4b934417220c914a3854c0b->enter($__internal_1f0d0732bcde0ee229b200a3db1ba659779c3256c4b934417220c914a3854c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6fe3b6043f076a633be65ba5af4497cfdfb7abfc923442e21380777f23ceec63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe3b6043f076a633be65ba5af4497cfdfb7abfc923442e21380777f23ceec63->enter($__internal_6fe3b6043f076a633be65ba5af4497cfdfb7abfc923442e21380777f23ceec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f0d0732bcde0ee229b200a3db1ba659779c3256c4b934417220c914a3854c0b->leave($__internal_1f0d0732bcde0ee229b200a3db1ba659779c3256c4b934417220c914a3854c0b_prof);

        
        $__internal_6fe3b6043f076a633be65ba5af4497cfdfb7abfc923442e21380777f23ceec63->leave($__internal_6fe3b6043f076a633be65ba5af4497cfdfb7abfc923442e21380777f23ceec63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
